<?php
class AJAXController
{
    public function index()
    {
        if (isset($_POST['proj'])) {
            if ($_POST['proj'] == 'PHP Mini Framework') {
                $this->phpmf();
            } 
            else if ($_POST['proj'] == 'Wholesale Ecommerce Site') {
                $this->ecomm();
            } 
            else {
                echo 'Invalid Project';
            }
        }
    }

    public function phpmf()
    {
        ob_start();
        ?>
        <!-- text-muted -->
        <div class="small ">
            <p>PHP Mini Framework is a project I created in my free time as a challenge/solution for some of my developments at home and work.</p>
            <p>The idea behind the project was to create a very simple, lightweight, and customizable PHP framework that had useful basic tools like MVC, routing, and database access.</p>
            <p>This project was a lot of fun to make, and I have since used the framework code on some project for work and personal projects, including this site!</p>
            <p class="mb-4">As well as the base framework code, I created a documentation site: <a href="https://php-mf-docs.connor-abbas.com/" target="_blank">PHP-MF Docs</a></p>
            <a href="https://github.com/connorabbas/php-mf" target="_blank"><button class="btn btn-rounded btn-info">Framework Repository</button></a>
        </div>
        <?php
        $html = ob_get_clean();
        echo $html;
    }

    public function ecomm()
    {
        ob_start();
        ?>
        <div class="small">
            <p class="mb-4">This is a large scale work project for a B2B wholesale ecommerce site that makes over 150+ million in sales yearly. I have contributed to the site in a team enviroment, helping make several updates, improvements, and new features. Some of which include:</p>
            <p class="fw-bold">Online Returns</p>
            <ul class="text-muted">
                <li>Customer facing page to search for and request returns on products from previous orders (very similar to Amazon)</li>
                <li>Online Portal for Customer Service staff to view and process the requested returns</li>
            </ul>
            <br>
            <p class="fw-bold">Inventory Reports</p>
            <ul class="text-muted">
                <li>Customer facing page on the site letting the user search for product SKU's and add them to a weekly inventory information report</li>
                <li>The reports generate the products inventory quantities, pricing, description, and other pertinent data</li>
                <li>The customer gives the report a name, what email/s they would like the report sent to, and agree to the product information usage agreement</li>
                <li>Customers can revist the same page and access their saved reports to edit or delete them</li>
                <li>An automated weekly script runs that gathers the necessary SKU data, and sends the generated CSV reports to the customers</li>
            </ul>
            <br>
            <p class="fw-bold">Automated API Signup for Customers</p>
            <ul class="text-muted">
                <li>Existing customers can sign up to use the companies API service with a one click agreement while signed in</li>
                <li>Previously was a manual process</li>
            </ul>
            <br>
            <p class="fw-bold">Automated New Customer Signup</p>
            <ul class="text-muted">
                <li>Since the ecommerce site is B2B, all customers must have a registered account to purchase products</li>
                <li>Previously, all new customer request would need to be worked by customer service individually</li>
            </ul>
            

        </div>
        <?php
        $html = ob_get_clean();
        echo $html;
    }
}