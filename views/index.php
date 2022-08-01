    <?php views('partials/header.php') ?>
    <?php views('partials/nav.php'); ?>
    <br>
    <div class="main-content">
        <center>
            <h3>Welcome to the MVC.</h3>
        </center>
        <br />
        <p><mark><b>PHP is a Scripting language</b></mark> and it's a Simple <mark><b>MVC framework</b></mark> using PHP.
            <mark><b>Model–view–controller</b></mark> is a software architectural pattern commonly used for developing user interfaces that
            divide the related program logic into three interconnected elements.
            This is done to separate internal representations of information from the ways information is presented to and accepted from the user.
        </p>
        <br>
        <h3>Application</h3> <br>
        <p>
            The <mark><b>Model-View-Controller (MVC)</b></mark> is an architectural pattern that separates an application into three main logical components: the model, the view, and the controller. Each of these components are built to handle specific development aspects of an application.

        </p> <br>
        <h3>Disadvantages</h3><br>
        <p>
            There are a few disadvantages of MVC architecture:
            the complexity in code navigation (with all updates, the structure becomes more complex),
            the cost of frequent changes and updates,
            MVC pattern can be hard to understand due to the complexity and updates.

        </p> <br>
        <h3>Structure</h3><br>
        <p>
            -MVC is an architectural pattern consisting of three parts: Model, View, Controller. Model: Handles data logic. View: It displays the information from the model to the user. Controller: It controls the data flow into a model object and updates the view whenever data changes.

        </p><br> <br>
        <h3>Basics</h3><br>
        <p>
            <mark><b>Basic MVC Architecture</b></mark> <br> <br>
        <ul>
            <li> <b>Model</b> − The lowest level of the pattern which is responsible for maintaining data.
            </li>
            <li><b>View</b> − This is responsible for displaying all or a portion of the data to the user.</li>
            <li><b>Controller</b> − Software Code that controls the interactions between the Model and View.</li>
        </ul>
        </p>
    </div>
    <?php views('partials/footer.php') ?>