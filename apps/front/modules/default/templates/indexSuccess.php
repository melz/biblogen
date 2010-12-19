<h1><?php echo $median; ?></h1>
<form action="<?php echo url_for('@generate_schedule'); ?>" method="post">
<div>
I want to start with : <?php echo $schedule['start_book']->render() ?>
</div>
<div>
and end with : <?php echo $schedule['end_book']->render() ?>
</div>
<div>and do this within: <?php echo $schedule['time_amount']->render() ?> <?php echo $schedule['time_duration']->render() ?></div>
<div>starting: <?php echo $schedule['starting']->render() ?></div>
<div>and <strong>excluding</strong>: <?php echo $schedule['exclude_days']->render() ?></div>

<div class="form_row">
  <input type="submit" name="submit" value="Get my schedule!" />
</div>
</form>