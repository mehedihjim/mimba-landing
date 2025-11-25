{{-- Scroll to Top Button --}}
<button id="scroll-to-top" class="scroll-top-button">
    <svg class="svgIcon" viewBox="0 0 384 512">
        <path
            d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z">
        </path>
    </svg>
</button>

<style>
    .scroll-top-button {
        position: fixed;
        bottom: 2rem;
        right: 2rem;
        z-index: 50;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: #1F6396;
        border: none;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0px 0px 0px 4px rgba(31, 99, 150, 0.253);
        cursor: pointer;
        transition-duration: 0.3s;
        overflow: hidden;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s, visibility 0.3s, width 0.3s, border-radius 0.3s, background-color 0.3s;
    }

    .scroll-top-button.show {
        opacity: 1;
        visibility: visible;
    }

    .svgIcon {
        width: 12px;
        transition-duration: 0.3s;
    }

    .svgIcon path {
        fill: white;
    }

    .scroll-top-button:hover {
        width: 140px;
        border-radius: 50px;
        transition-duration: 0.3s;
        background-color: #2c7ab8;
        align-items: center;
    }

    .scroll-top-button:hover .svgIcon {
        transition-duration: 0.3s;
        transform: translateY(-200%);
    }

    .scroll-top-button::before {
        position: absolute;
        bottom: -20px;
        content: "Back to Top";
        color: white;
        font-size: 0px;
    }

    .scroll-top-button:hover::before {
        font-size: 13px;
        opacity: 1;
        bottom: unset;
        transition-duration: 0.3s;
    }

    /* Mobile responsive */
    @media (max-width: 768px) {
        .scroll-top-button {
            bottom: 1.5rem;
            right: 1.5rem;
        }

        .scroll-top-button:hover {
            width: 50px;
            border-radius: 50%;
        }

        .scroll-top-button:hover .svgIcon {
            transform: translateY(0);
        }

        .scroll-top-button:hover::before {
            font-size: 0px;
        }
    }
</style>

<script>
    // Scroll to Top Button
    const scrollToTopBtn = document.getElementById('scroll-to-top');

    // Show/hide button based on scroll position
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            scrollToTopBtn.classList.add('show');
        } else {
            scrollToTopBtn.classList.remove('show');
        }
    });

    // Smooth scroll to top
    scrollToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>
