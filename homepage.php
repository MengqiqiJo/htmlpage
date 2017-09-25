<?php
echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">';
echo '<link rel="stylesheet" type="text/css" href="style.css">';
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>';
echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>';
echo '<script src="https://use.fontawesome.com/e525368239.js"></script>';

/**
*
*/
class Page {

  public function getQuickLinkData() {
    $eachDiv[] = array(
      'icons' => 'fa-list-ul',
      'quickLinksText' => 'Register Event',
    );

    $eachDiv[] = array(
      'icons' => 'fa-tachometer',
      'quickLinksText' => 'Goto Dashboard',
    );

    $eachDiv[] = array(
      'icons' => 'fa-heartbeat',
      'quickLinksText' => 'View Biomeds',
    );
    $eachDiv[] = array(
      'icons' => 'fa-tint',
      'quickLinksText' => 'View Diabetes',
    );
    $eachDiv[] = array(
      'icons' => 'fa-soundcloud',
      'quickLinksText' => 'Event Summaries',
    );
    $eachDiv[] = array(
      'icons' => 'fa-bullhorn',
      'quickLinksText' => 'HCP Feedback',
    );
    $eachDiv[] = array(
      'icons' => 'fa-check-circle',
      'quickLinksText' => 'One Click Report',
    );
    $eachDiv[] = array(
      'icons' => 'fa-question',
      'quickLinksText' => '&nbsp;&nbsp;&nbsp;&nbsp;FAQ\'s',
    );

    return $eachDiv;
  }

  public function homepage() {

    $output = '';

    $divData = $this->getQuickLinkData();

    $output .= '<div class="container">';
      $output .= '<div class="quickLinks col-sm-12">';
        foreach ($divData as $sub_value) {
          $text = $sub_value['quickLinksText'];
          $icon = $sub_value['icons'];
          $output .= '<div class="eachElement col-sm-2 col-xs-12 col-md-2">';
            $output .= '<div class="icondiv ">';
              $output .= '<i class="fa '. "$icon" . ' fa-2x" aria-hidden="true"></i>';
            $output .= '</div>';
            $output .= '<p>' . "$text" . '</p>';
          $output .= '</div>';
        }
      $output .= '</div>';
      $output .= $this->floatDiv();
    $output .= '</div>';
  return $output;
  }

  public function floatDiv() {
    $output .= '<div class="row lineSecond col-sm-12">';
      $output .= '<div class="col-md-6 col-sm-12 col-xs-12">';
        $output .= '<div class="recentActivity">';
        $output .= '</div>';
      $output .= '</div>';
      $output .= '<div class="col-md-6 col-sm-12 col-xs-12">';
        $output .= '<div class="recentActivity">';
        $output .= '</div>';
      $output .= '</div>';
      $output .= '</div>';
    $output .= '</div>';
      return $output;
  }

}

$page = new Page();
$cc = $page->homepage();
echo $cc;