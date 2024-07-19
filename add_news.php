<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SVCET News Upload Portal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\add_news.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">SVCET News Upload Portal</h2>
    <form action="add_news_upload.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="form-group col-md-6">
                <label for="heading">Heading</label>
                <input type="text" class="form-control" id="heading" name="heading" required>
            </div>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="news_category">News Belong To</label>
                <select class="form-control" id="news_category" name="news_category" required>
                    <option value="" disabled selected>Select category</option>
                    <option value="category1">Category 1</option>
                    <option value="category2">Category 2</option>
                    <option value="category3">Category 3</option>
                    <!-- Add more categories as needed -->
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="website_link">Website Link (Optional)</label>
                <input type="url" class="form-control" id="website_link" name="website_link">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="image">Upload Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>
            <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
