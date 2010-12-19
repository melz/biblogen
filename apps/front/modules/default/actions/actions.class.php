<?php
class defaultActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->schedule = new ScheduleForm();
    $nt = new NewTestament();
    $this->median = $nt->median();
  }

  public function executeGenerateSchedule(sfWebRequest $request) {
    if ($request->isMethod(sfRequest::POST)) {
      $this->schedule = new ScheduleForm();
      $this->processForm($request, $this->schedule);
      $this->setTemplate('index');
    }
    else $this->redirect('@homepage');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()));
    if ($form->isValid())
    {
      $nt = new NewTestament();
    }
  }

  public function executeFaq(sfWebRequest $request) { }

  /*
   * Usage: days_between(time(), strtotime("2011-09-11"),array(1,6));
   */
  private function days_between($start_date, $end_date, $avoid_days) {
    $total = 0;
    $x = $start_date;

    while($x < $end_date) {
      if (!in_array(date("N",$x), $avoid_days)) $total++;
      $x = strtotime(date('Y-m-d', $x) ." +1 day");
    }
    return $total;
  }

}