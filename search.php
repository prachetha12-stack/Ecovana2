<?php
// Dynamic categories (can come from DB later)
$categories = [
    "Indoor Plants",
    "Outdoor Plants",
    "Medicinal Plants",
    "Succulents",
    "Shrubs",
    "Herbs",
    "Tools"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Search Plants</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
body {
    font-family: Arial, sans-serif;
    background: #f4f4f4;
}

/* Overlay */

/* Search Box */
.search-box {
    width: 90%;
    max-width: 600px;
    background: #fff;
    border-radius: 12px;
    padding: 15px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

/* Input */
.search-input {
    display: flex;
    align-items: center;
    border-bottom: 1px solid #ddd;
    padding-bottom: 10px;
}

.search-input input {
    border: none;
    outline: none;
    flex: 1;
    font-size: 16px;
}

.search-input i {
    color: #888;
    margin-right: 10px;
    cursor: pointer;
}

/* Categories */
.title {
    font-size: 12px;
    color: #888;
    margin: 15px 0 10px;
    letter-spacing: 1px;
}

.categories {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.chip {
    background: #eee;
    padding: 8px 14px;
    border-radius: 20px;
    font-size: 14px;
    cursor: pointer;
    transition: 0.3s;
}

.chip:hover {
    background: #d4d4d4;
}

</style>
</head>
<body><center>
    <div class="search-box">
        
        <div class="search-input">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Search plants by name or category...">
            <i class="fas fa-times" onclick="closeSearch()"></i>
        </div>

        <div class="title">QUICK CATEGORIES</div>

        <div class="categories">
            <?php foreach($categories as $cat): ?>
                <div class="chip"><?php echo $cat; ?></div>
            <?php endforeach; ?>
        </div>

    </div>
</div>

</center>

</body>
</html>