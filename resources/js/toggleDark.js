export const initTheme = () => {
    if (localStorage.theme === "dark") {
        document.documentElement.classList.add("dark");
        document.documentElement.classList.remove("hidden");
    } else {
        document.documentElement.classList.remove("dark");
        document.documentElement.classList.remove("hidden");
    }
};
