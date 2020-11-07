<?php

require_once "header.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .demo-event-pictures {}

        .demo-event-pictures img {
            width: 300px;
            height: 400px;
            margin: 10px;
        }

        .our-users-reviews ul li {
            border: 1px solid black;
            text-align: justify;
            padding: 10px;
            line-height: 1.5;
        }

        .our-users-reviews ul li blockquote {
            font-weight: 700;
        }
    </style>
</head>

<body>
    <div class="our-events-pics">
        <h2>Here Our Some Pictures of Successful Events by Our Top Planner</h2>
        <div class="demo-event-pictures">
            <img src="event-demo-images/birthday-1.jpg" alt="">
            <img src="event-demo-images/birthday-2.jpg" alt="">
            <img src="event-demo-images/cooking.jpg" alt="">
            <img src="event-demo-images/wedding-reception-design.jpg" alt="">
            <img src="event-demo-images/wedding-2.jpg" alt="">
            <img src="event-demo-images/corporate-1jpg.jpg" alt="">
            <img src="event-demo-images/corporate-2.jpg" alt="">
        </div>
    </div>
    <div class="our-users-reviews">
        <h3>Some Users Reviews</h3>
        <ul>
            <li>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum eaque dicta voluptate a voluptatem
                    mollitia nobis. Unde quos id, iusto tempore qui aut quo rem distinctio facere autem reprehenderit
                    excepturi culpa cum! Deserunt distinctio dolore ut ducimus illum quae in assumenda aut? Dolor
                    consectetur porro voluptas, dolores officia tempore quam!

                    <blockquote>-Shakib</blockquote>
                </p>
            </li>

            <li>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et explicabo quia in repudiandae. Ratione
                    tenetur, ullam, porro temporibus dolores sit id corporis illo cumque possimus aliquid qui sunt nobis
                    quia repellendus perspiciatis obcaecati voluptas dolorem aperiam deleniti magni architecto? Odit
                    laboriosam aperiam reiciendis adipisci voluptatibus ipsum autem quae. Porro, nihil!
                    <blockquote>-Shakib</blockquote>
                </p>
            </li>
        </ul>
    </div>



    <?php

    require_once "footer.php";
    ?>

</body>

</html>