document.addEventListener("DOMContentLoaded", () => {

    // Button erzeugen
    const container = document.createElement("div");
    container.className = "alignwide scroll-top-container";

    container.innerHTML = `
        <a href="#header" class="scroll-top-button" aria-label="Nach oben">
            <svg viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" style="width:1.875rem; height:1.875rem;">
                <circle cx="15" cy="15" r="15" fill="#333333"/>
                <path d="M14.995 22.7649V7.23486" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M10.275 12.3149L14.995 7.23486L19.725 12.3149" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    `;

    document.body.appendChild(container);

    const button = container.querySelector(".scroll-top-button");

    button.addEventListener("click", (event) => {
        event.preventDefault();

        document.querySelector("#header")?.scrollIntoView({
            behavior: "smooth",
            block: "start"
        });
    });

    // Sichtbarkeit

    const header = document.querySelector("#header");
    const toggleButton = () => {
        button.classList.toggle(
            "is-visible",
            header.getBoundingClientRect().bottom < 0
        );
    };

    window.addEventListener("scroll", toggleButton, { passive: true });
    window.addEventListener("resize", toggleButton);
    toggleButton();

});