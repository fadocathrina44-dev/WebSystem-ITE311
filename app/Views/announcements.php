<?= $this->include('templates/header') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 2rem;
            background-color: #f8f9fa;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .alert {
            margin-top: 1rem;
            padding: 10px;
            border-radius: 5px;
        }
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>

    <h1>📢 Announcements</h1>

    <!-- Flash message (error) -->
    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= esc(session()->getFlashdata('error')) ?>
        </div>
    <?php endif; ?>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Date Posted</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($announcements) && is_array($announcements)): ?>
                <?php foreach ($announcements as $announcement): ?>
                    <tr>
                        <td><?= esc($announcement['title']) ?></td>
                        <td><?= esc($announcement['content']) ?></td>
                        <td><?= esc($announcement['created_at']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">No announcements found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>
</html>
