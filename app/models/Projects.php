<?php
class Projects
{
    public function phpmf()
    {
        ob_start();
        ?>
        <!-- text-muted -->
        <div class="small ">
            <p>PHP Mini Framework is a project I created in my free time as a challenge/solution for some of my developments at home and work.</p>
            <p>The idea behind the project was to create a very simple, lightweight, and customizable PHP framework that had useful basic tools like routing, MVC architecture, and database access.</p>
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
                <li>Previously was a manual process for IT</li>
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

    public function inv()
    {
        ob_start();
        ?>
        <div class="small">
            <p class="">This was a project I worked on indivdually at work. The company I worked for offered a CRM service for dealers in the machinery business, where they could add listings of their inventory in an online dashboard. We would then build them a website for their business and provide a page that would show their listings with basic features such as filtering, sorting and search functionalities (very similar to <a href="https://www.dealerinspire.com/metal-modern-inventory-management-system/">Dealer Inspire</a>).</p>
            <p>The tool for showing the listings on all the machinery sites was essentially an iframe of our filtering, sorting and search tool that would connect to the users account from their CRM account ID via a url parameter. The site's designer would paste in the iframe and change some basic overriding styles such as colors, then call it a day.</p>
            <p>The process was very simple and worked well on any web platform since all we relied on was an iframe to show the listings. However, the problem with the copy/paste solution is that all the dealers listings on their site would look the same, just with some color variations.</p>
            <p>Many customers took notice of this, and wanted a more customized look that would set their listings apart from others. Not only that, they wanted to rearange, alter, or remove features entirely.</p>
            <p class="mb-4">Since our company focused mostly on selling WordPress sites, our solution to this was to make a plugin that would allow us to simply enter in the customers CRM ID into the sites admin dashboard, then it would pull in the customers info needed for their account/listings.</p>
            <p class="fw-bold">Plugin Features</p>
            <ul class="text-muted">
                <li>Inventory management and front end display/filtering</li>
                <li>Backend dashboard with various settings and filter options for inventory from customer account ID</li>
                <li>Data is pulled with API curl calls</li>
                <li>JSON data is manipulated for content and filtering</li>
                <li>Creates WP posts that act as inventory url's for specfic filtered inventory pages</li>
                <li>Custom generated SEO for individual listings</li>
                <li>Example Site: <a href="https://www.bottomlineequipment.com/all-for-sale-inventory/" target="_blank">Bottom Line Equipment</a></li>
            </ul>
            <br>
        </div>
        <?php
        $html = ob_get_clean();
        echo $html;
    }

    public function obit()
    {
        ob_start();
        ?>
        <div class="small">
            <p class="">South Dakota Area Obituaries covers obituaries for all of South Dakota and surrounding areas.</p>
            <p class="mb-4"><a href="https://areaobituaries.com/obituaries/">South Dakota Area Obituaries</a></p>
            <p class="fw-bold">Site Features</p>
            <ul class="text-muted">
                <li>Combination of data collected from funeral home RSS feeds, and registered accounts posting obituaries</li>
                <li>Basic database filtered search</li>
                <li>Funeral home accounts</li>
                <li>Sign up process with email validation for new funeral homes</li>
                <li>User login and dashboard to post/edit/delete obituaries for funeral homes</li>
            <br>
        </div>
        <?php
        $html = ob_get_clean();
        echo $html;
    }
}