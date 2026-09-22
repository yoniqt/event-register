const backdrop = document.querySelector('[data-modal-backdrop]');

if (backdrop) {
    const form = document.getElementById('registration-form');
    const formWrapper = backdrop.querySelector('[data-modal-form]');
    const successWrapper = backdrop.querySelector('[data-modal-success]');
    const submitButton = form.querySelector('button[type="submit"]');
    const submitLabel = form.querySelector('[data-submit-label]');
    const formError = backdrop.querySelector('[data-form-error]');
    const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

    const openModal = () => {
        backdrop.classList.remove('hidden');
        backdrop.classList.add('flex');
    };

    const closeModal = () => {
        backdrop.classList.add('hidden');
        backdrop.classList.remove('flex');
    };

    const resetModal = () => {
        form.reset();
        form.querySelectorAll('[data-error]').forEach((el) => el.classList.add('hidden'));
        formError.classList.add('hidden');
        formWrapper.classList.remove('hidden');
        successWrapper.classList.add('hidden');
    };

    document.querySelectorAll('[data-open-modal]').forEach((button) => {
        button.addEventListener('click', () => {
            resetModal();
            openModal();
        });
    });

    backdrop.querySelectorAll('[data-close-modal]').forEach((button) => {
        button.addEventListener('click', closeModal);
    });

    backdrop.addEventListener('click', (event) => {
        if (event.target === backdrop) {
            closeModal();
        }
    });

    form.addEventListener('submit', async (event) => {
        event.preventDefault();

        form.querySelectorAll('[data-error]').forEach((el) => el.classList.add('hidden'));
        formError.classList.add('hidden');
        submitButton.disabled = true;
        submitLabel.textContent = 'Submitting…';

        try {
            const response = await fetch('/api/register', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    Accept: 'application/json',
                    'X-CSRF-TOKEN': csrfToken,
                },
                body: JSON.stringify({
                    full_name: form.full_name.value,
                    email: form.email.value,
                    contact_number: form.contact_number.value,
                    location: form.location.value,
                    organization: form.organization.value,
                }),
            });

            const payload = await response.json();

            if (response.status === 422) {
                Object.entries(payload.errors ?? {}).forEach(([field, messages]) => {
                    const el = form.querySelector(`[data-error="${field}"]`);
                    if (el) {
                        el.textContent = messages[0];
                        el.classList.remove('hidden');
                    }
                });
                return;
            }

            if (!response.ok) {
                formError.textContent = payload.message ?? 'Something went wrong. Please try again.';
                formError.classList.remove('hidden');
                return;
            }

            formWrapper.classList.add('hidden');
            successWrapper.classList.remove('hidden');
        } catch (error) {
            formError.textContent = 'Network error — please try again.';
            formError.classList.remove('hidden');
        } finally {
            submitButton.disabled = false;
            submitLabel.textContent = 'Confirm registration';
        }
    });
}
