import './bootstrap';

import { toggleSideBar } from "./admin.js";

document.addEventListener('DOMContentLoaded', () => {
    const sideBarToggles = document.querySelectorAll(".side-bar-toggle");
    
    sideBarToggles.forEach((e) => {
        e.addEventListener("click", toggleSideBar);
    });
});