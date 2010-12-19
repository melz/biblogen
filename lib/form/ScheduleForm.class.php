<?php
class ScheduleForm extends BaseForm
{
  public function configure()
  {
    $simplified_days = array();
    foreach (sfConfig::get('app_weekdays') as $w) $simplified_days[] = substr($w, 0, 3);

    $this->setWidgets(array(
      'start_book'        => new sfWidgetFormChoice(array(
                              'choices'  => sfConfig::get('app_nt_books'),
                              'multiple' => false,
                              'expanded' => false,
                             )),
      'end_book'          => new sfWidgetFormChoice(array(
                              'choices'  => sfConfig::get('app_nt_books'),
                              'multiple' => false,
                              'expanded' => false,
                             )),
      'time_amount'       => new sfWidgetFormInputText(),
      'time_duration'     => new sfWidgetFormChoice(array(
                              'choices'  => sfConfig::get('app_durations'),
                              'multiple' => false,
                              'expanded' => false,
                             )),
      'exclude_days'      => new sfWidgetFormChoice(array(
                              'choices'  => $simplified_days,
                              'multiple' => true,
                              'expanded' => true,
                             )),
      'starting'          => new sfWidgetFormDate(array(
                              'can_be_empty' => false
                             )),
    ));

    $this->setValidators(array(
      'start_book' => new sfValidatorChoice(array('choices' => sfConfig::get('app_nt_books'))),
      'end_book'   => new sfValidatorChoice(array('choices' => sfConfig::get('app_nt_books'))),
      'time_amount' => new sfValidatorString(array('min_length' => 1, 'max_length' => 2)),
      'time_duration'   => new sfValidatorChoice(array('choices' => sfConfig::get('app_durations'))),
      'exclude_days' => new sfValidatorChoice(array('choices' => $simplified_days)),
    ));

    $this->setDefault('end_book', 27); // set default end book to "Revelations"
    $this->setDefault('time_duration', 2); // set default duration to "month(s)"
    $this->widgetSchema->setNameFormat('schedule[%s]');
  }
}