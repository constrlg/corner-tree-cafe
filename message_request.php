<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/admin_style.css">
    <link rel="icon" href="assets/img/corner_tree_cafe_logo.jpg">
    <title>Corner Tree Cafe: Admin - Message Feedback</title>
  </head>
  <body>

    <?php include_once("admin_sidebar.php") ?>

    <section id="message_request">
        <div class="container">
            <div class="message_request_content">
                    <h1 class="message_request_title">Message Request</h1>
                        <div class="message_request_list">
                            <table class="table">
                                <thead>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Contact Number</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </thead>

                                <tbody>
                                    <?php 
                                        include("conn.php");
                                        $mr = mysqli_query($conn, "SELECT * FROM `message_request`");
                                        while($row = mysqli_fetch_array($mr)) {
                                            echo "
                                                <tr>
                                                    <td>$row[name]</td>
                                                    <td>$row[email]</td>
                                                    <td>$row[contact_number]</td>
                                                    <td>$row[message]</td>
                                                    <td><a href='message_request_delete.php? id=$row[id]' class='delete_food_item_btn'>Delete</a></td>
                                                </tr>
                                            ";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <button id="scroll_to_top_arrow">
        <i class="fas fa-arrow-up"></i>
    </button>

    <?php include_once("admin_footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="assets/js/scroll_to_top_arrow_active.js"></script>
</body>
</html>