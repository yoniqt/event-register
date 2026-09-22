const tableBody = document.querySelector('[data-table-body]');

if (tableBody) {
    const searchInput = document.querySelector('[data-search]');
    const prevButton = document.querySelector('[data-prev-page]');
    const nextButton = document.querySelector('[data-next-page]');
    const paginationInfo = document.querySelector('[data-pagination-info]');
    const summaryRegistrations = document.querySelector('[data-summary-registrations]');

    let currentPage = 1;
    let lastPage = 1;
    let searchTimer = null;

    const escapeHtml = (value) => String(value ?? '').replace(/[&<>"']/g, (char) => ({
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        '"': '&quot;',
        "'": '&#39;',
    }[char]));

    const formatDate = (value) => value ? new Date(value).toLocaleString() : '—';

    const renderRows = (registrations) => {
        if (registrations.length === 0) {
            tableBody.innerHTML = '<tr><td class="px-4 py-6 text-center text-slate-400 dark:text-slate-500" colspan="4">No registrations found.</td></tr>';
            return;
        }

        tableBody.innerHTML = registrations.map((registration) => `
            <tr class="transition-colors hover:bg-slate-50 dark:hover:bg-slate-900/60">
                <td class="px-4 py-3 font-medium text-slate-900 dark:text-white">${escapeHtml(registration.full_name)}</td>
                <td class="px-4 py-3 text-slate-600 dark:text-slate-300">${escapeHtml(registration.email)}</td>
                <td class="px-4 py-3 text-slate-600 dark:text-slate-300">${escapeHtml(registration.contact_number)}</td>
                <td class="px-4 py-3 text-slate-500 dark:text-slate-400">${formatDate(registration.created_at)}</td>
            </tr>
        `).join('');
    };

    const loadRegistrations = async () => {
        tableBody.innerHTML = '<tr><td class="px-4 py-6 text-center text-slate-400 dark:text-slate-500" colspan="4">Loading…</td></tr>';

        const params = new URLSearchParams({ page: currentPage });
        if (searchInput.value.trim()) {
            params.set('search', searchInput.value.trim());
        }

        const response = await fetch(`/api/admin/registrations?${params.toString()}`, {
            headers: { Accept: 'application/json' },
        });

        if (!response.ok) {
            tableBody.innerHTML = '<tr><td class="px-4 py-6 text-center text-red-500" colspan="4">Failed to load registrations.</td></tr>';
            return;
        }

        const payload = await response.json();

        renderRows(payload.data);

        currentPage = payload.meta.current_page;
        lastPage = payload.meta.last_page;
        paginationInfo.textContent = `Page ${currentPage} of ${lastPage} · ${payload.meta.total} total`;
        prevButton.disabled = currentPage <= 1;
        nextButton.disabled = currentPage >= lastPage;

        summaryRegistrations.textContent = payload.summary.total_registrations;
    };

    searchInput.addEventListener('input', () => {
        clearTimeout(searchTimer);
        searchTimer = setTimeout(() => {
            currentPage = 1;
            loadRegistrations();
        }, 300);
    });

    prevButton.addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage -= 1;
            loadRegistrations();
        }
    });

    nextButton.addEventListener('click', () => {
        if (currentPage < lastPage) {
            currentPage += 1;
            loadRegistrations();
        }
    });

    loadRegistrations();
}
