<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }
  </style>
</head>

<body>
    <div class="container m-6">
        <h2 class="font-bold">PHP TO-DO list</h2>
        <div class="row-span-1">
            <div class="sm:col-span-6">
                <?php
                include('database.php');
                include('delete-to-do.php');
                include('to-do-form.php');
                include('to-do-list.php');                ?>
            </div>
            <div class="sm:col-span-6"></div>
        </div>
    </div>
</body>

</html>