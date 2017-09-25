<?php

echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">';
echo '<link rel="stylesheet" type="text/css" href="style.css">';
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>';
echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>';
echo '<script src="https://use.fontawesome.com/e525368239.js"></script>';

class page {

  public $icons=[];

  $icon[0] = '<i class="fa fa-list-ul fa-2x" aria-hidden="true"></i>';
  $icon[1] = '<i class="fa fa-tachometer fa-2x" aria-hidden="true"></i>';
  $icon[2] = '<i class="fa fa-heartbeat fa-2x" aria-hidden="true"></i>';
  $icon[3] = '<i class="fa fa-tint fa-2x" aria-hidden="true"></i>';
  $icon[4] = '<i class="fa fa-soundcloud fa-2x" aria-hidden="true"></i>';
  $icon[5] = '<i class="fa fa-bullhorn fa-2x" aria-hidden="true"></i>';
  $icon[6] = '<i class="fa fa-check-circle fa-2x" aria-hidden="true"></i>';
  $icon[7] = '<i class="fa fa-question fa-2x" aria-hidden="true"></i>';

  public $quickLinksText=[];

  $quickLinksText[] = 'Register Event';
  $quickLinksText[1] = 'Goto Dashboard';
  $quickLinksText[2] = 'View Biomeds';
  $quickLinksText[3] = 'View Diabetes';
  $quickLinksText[4] = 'Event Summaries';
  $quickLinksText[5] = 'HCP Feedback';
  $quickLinksText[6] = 'One Click Report';
  $quickLinksText[7] = 'FAQ\'s';

  function getQuickLinkDiv() {
    $output = '';
    for ($i = 0; $i < count($icons); $i ++) {
      $output .= '<div class="eachElement col-sm-3">';
        $output .= '<div class="icondiv">';
          $output .= $icons[$i];
        $output .= '</div>';
        $output .= '<p> . $quickLinksText[$i] . </p>';
      $output .= '</div>';
    }
    return $output;



  }



// $output = '';

// $output .= '<div class="container">';
//   $output .= '<div class="quickLinks col-sm-12">';
//     $output .= '<div class="row">';
//       $output .= '<div class="eachElement col-sm-2">';
//         $output .= '<div class="icondiv">';
//           $output .= '<i class="fa fa-list-ul" aria-hidden="true"></i>';
//         $output .= '</div>';
//         $output .= '<p>Register Event</p>';
//       $output .= '</div>';

//       $output .= '<div class="eachElement col-sm-2">';
//         $output .= '<div class="icondiv">';
//           $output .= '<i class="fa fa-tachometer" aria-hidden="true"></i>';
//         $output .= '</div>';
//         $output .= '<p>Goto Dashboard</p>';
//       $output .= '</div>';

//       $output .= '<div class="eachElement col-sm-2">';
//         $output .= '<div class="icondiv">';
//           $output .= '<i class="fa fa-heartbeat" aria-hidden="true"></i>';
//         $output .= '</div>';
//         $output .= '<p>View Biomeds</p>';
//       $output .= '</div>';

//       $output .= '<div class="eachElement col-sm-2">';
//         $output .= '<div class="icondiv">';
//           $output .= '<i class="fa fa-tint" aria-hidden="true"></i>';
//         $output .= '</div>';
//         $output .= '<p>View Diabetes</p>';
//       $output .= '</div>';
//     $output .= '</div>';
//     $output .= '<div class="row">';

//       $output .= '<div class="eachElement col-sm-2">';
//         $output .= '<div class="icondiv">';
//           $output .= '<i class="fa fa-soundcloud" aria-hidden="true"></i>';
//         $output .= '</div>';
//         $output .= '<p>Event Summaries</p>';
//       $output .= '</div>';

//       $output .= '<div class="eachElement col-sm-2">';
//         $output .= '<div class="icondiv">';
//          $output .= '<i class="fa fa-bullhorn" aria-hidden="true"></i>';
//         $output .= '</div>';
//         $output .= '<p>HCP Feedback</p>';
//       $output .= '</div>';

//       $output .= '<div class="eachElement col-sm-2">';
//         $output .= '<div class="icondiv">';
//          $output .= '<i class="fa fa-check-circle" aria-hidden="true"></i>';
//         $output .= '</div>';
//         $output .= '<p>One Click Report</p>';
//       $output .= '</div>';

//       $output .= '<div class="eachElement col-sm-2">';
//         $output .= '<div class="icondiv">';
//           $output .= '<i class="fa fa-question" aria-hidden="true"></i>';
//         $output .= '</div>';
//         $output .= '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FAQ\'s</p>';
//       $output .= '</div>';
//     $output .= '</div>';
//   $output .= '</div>';

//   $output .= '<div class="row lineSecond col-sm-12">';
//     $output .= '<div class="recentActivity col-sm-5">';
//     $output .= '</div>';
//     $output .= '<div class="updates col-sm-5">';
//     $output .= '</div>';
//   $output .= '</div>';
// $output .= '</div>';
}

// $htmlpage = new page();
// $cc = $htmlpage->getQuickLinkDiv();
