const shareButton = document.querySelector('[data-share]');

if (shareButton) {
    shareButton.addEventListener('click', async () => {
        const shareData = { title: document.title, url: window.location.href };

        if (navigator.share) {
            try {
                await navigator.share(shareData);
            } catch (error) {
                // user cancelled the share sheet — nothing to do
            }
            return;
        }

        try {
            await navigator.clipboard.writeText(shareData.url);
            const original = shareButton.innerHTML;
            shareButton.textContent = 'Copied!';
            setTimeout(() => {
                shareButton.innerHTML = original;
            }, 1500);
        } catch (error) {
            // clipboard unavailable — silently ignore
        }
    });
}

const likeButton = document.querySelector('[data-like]');

if (likeButton) {
    const icon = likeButton.querySelector('[data-like-icon]');
    const storageKey = 'liked-event';

    const applyState = (liked) => {
        likeButton.setAttribute('aria-pressed', String(liked));
        icon.setAttribute('fill', liked ? 'currentColor' : 'none');
        likeButton.classList.toggle('text-orange-600', liked);
        likeButton.classList.toggle('dark:text-orange-400', liked);
        likeButton.classList.toggle('border-orange-400', liked);
        likeButton.classList.toggle('dark:border-orange-500/50', liked);
    };

    applyState(localStorage.getItem(storageKey) === '1');

    likeButton.addEventListener('click', () => {
        const liked = likeButton.getAttribute('aria-pressed') !== 'true';
        localStorage.setItem(storageKey, liked ? '1' : '0');
        applyState(liked);
    });
}
