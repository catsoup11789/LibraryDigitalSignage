<?php
/**
 * Templates render the content of your pages. 
 * They contain the markup together with some control structures like loops or if-statements.
 * The `$page` variable always refers to the currently active page. 
 * To fetch the content from each field we call the field name as a method on the `$page` object, e.g. `$page->title()`. * 
 * This default template must not be removed. It is used whenever Kirby cannot find a template with the name of the content file.
 * Snippets like the header, footer and intro contain markup used in multiple templates. They also help to keep templates clean.
 * More about templates: https://getkirby.com/docs/guide/templates/basics
 */
?>
<?php snippet('header') ?>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<style>
    body {
        overflow: hidden;
        margin: 0;
        padding: 0;
    }

    html {
        background: white;
    }

    html,
    body {
        height: 100%;
    }

    .fixed {
        height: 30px;
        background: #000;
        width: 100%;
        color: #fff !important;
        padding-top: .5em;
        padding-left: .5em;
        z-index: 99999;
    }

    .fixed a {
        color: #fff !important;
    }

    #loader {
        margin-top: 0px;
        height: 100%;
    }

    object {
        width: 100%;
        height: 100%;
        position: absolute;
    }

</style>
<main>
    <div style="background:#FFF;">
        <div class="fixed"><a href="<?= $_SERVER['HTTP_REFERER'] ?>">&#8592; Return to Salina Public Library</a></div>

    </div>
    <div id="loader">
    </div>
</main>
<script>
    $("#loader").html('<object data="<?php echo htmlspecialchars($_GET["shortcut"]); ?>" />');

</script>
<script type="text/javascript">
    function activityWatcher() {

        //The number of seconds that have passed
        //since the user was active.
        var secondsSinceLastActivity = 0;

        //Five minutes. 60 x 5 = 300 seconds.
        var maxInactivity = (60 * 1);

        //Setup the setInterval method to run
        //every second. 1000 milliseconds = 1 second.
        setInterval(function() {
            secondsSinceLastActivity++;
            console.log(secondsSinceLastActivity + ' seconds since the user was last active');
            //if the user has been inactive or idle for longer
            //then the seconds specified in maxInactivity
            if (secondsSinceLastActivity > maxInactivity) {
                console.log('User has been inactive for more than ' + maxInactivity + ' seconds');
                //Redirect them to your logout.php page.
                location.href = document.referrer;
            }
        }, 1000);

        //The function that will be called whenever a user is active
        function activity() {
            //reset the secondsSinceLastActivity variable
            //back to 0
            secondsSinceLastActivity = 0;
        }

        //An array of DOM events that should be interpreted as
        //user activity.
        var activityEvents = [
            'mousedown', 'mousemove', 'keydown',
            'scroll', 'touchstart'
        ];

        //add these events to the document.
        //register the activity function as the listener parameter.
        activityEvents.forEach(function(eventName) {
            document.addEventListener(eventName, activity, true);
        });


    }

    activityWatcher();

</script>

<?php snippet('footer') ?>
