/**
 * A function to toggle the side bar
 */
export function toggleSideBar() {
    const sideBar = document.getElementById("sideBar");

    const sideNavItems = sideBar?.querySelectorAll(".side-nav-item");
    const sideBarMenus = document.querySelectorAll(".menu-text");

    if (sideBar?.classList.contains("-translate-x-full") || sideBar?.classList.contains("min-w-16")) {
        sideBar.classList.replace("-translate-x-full", "translate-x-0");
        sideBar.classList.replace("min-w-16", "min-w-full");
        sideBar.classList.add("lg:min-w-72");

        sideBarMenus.forEach((e) => {
            e.classList.remove("hidden");
        });
        
        sideNavItems?.forEach((e) => {
            e.classList.add("ps-3");
        });

        document.body.classList.add("overflow-y-hidden", "md:overflow-y-auto");
    } else {
        sideBar?.classList.replace("translate-x-0", "-translate-x-full");
        sideBar?.classList.replace("min-w-full", "min-w-16");
        sideBar?.classList.remove("lg:min-w-72");

        sideBarMenus.forEach((e) => {
            e.classList.add("hidden");
        });

        sideNavItems?.forEach((e) => {
            e.classList.remove("ps-3");
        });

        document.body.classList.remove("overflow-y-hidden", "md:overflow-y-auto");
    }
}