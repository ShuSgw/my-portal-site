import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

const images = import.meta.glob("../images/icon/*.{png,jpg,jpeg,svg,gif}", {
    eager: true,
});

// 確認用（必要なければ削除）
console.log(images);
