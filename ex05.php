<?php
/*
 * Khi áp dụng kế thừa có sử dụng phương thức tĩnh
 * - Nếu dùng static => Gọi từ class nào => chạy phương thức của class đó
 * + Ví dụ: B::render() => Gọi getData() từ class B
 *          A::render() => Gọi getData() từ class A
 *
 * - Nếu dùng self => Gọi theo phương thức từ class cha
 *
 * */
require_once 'classes/A.php';
require_once 'classes/B.php';

echo B::render();