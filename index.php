<?php

$request = $_SERVER['REQUEST_URI'];

$journal = isset($_GET['journal']) ? $_GET['journal'] : '';
$article = isset($_GET['article']) ? $_GET['article'] : '';
$year = isset($_GET['year']) ? $_GET['year'] : '';
$decade = isset($_GET['decade']) ? $_GET['decade'] : '';

switch ($request) {
    case '/':
        require __DIR__ . '/views/pertanika/index.php';
        break;
    case '':
        require __DIR__ . '/views/pertanika/index.php';
        break;
    case '/introduction':
        require __DIR__ . '/views/pertanika/introduction.php';
        break;
    case '/journal-division':
        require __DIR__ . '/views/pertanika/journal-division.php';
        break;
    case '/staff-directory':
        require __DIR__ . '/views/pertanika/staff-directory.php';
        break;

    case '/pjst':
        require __DIR__ . '/views/pjst/index.php';
        break;
    case '/pjst/introduction':
        require __DIR__ . '/views/pjst/introduction.php';
        break;
    case '/pjst/scope':
        require __DIR__ . '/views/pjst/scope.php';
        break;
    case '/pjst/processing-time':
        require __DIR__ . '/views/pjst/processing-time.php';
        break;
    case '/pjst/peer-review':
        require __DIR__ . '/views/pjst/peer-review.php';
        break;
    case '/pjst/ebm':
        require __DIR__ . '/views/pjst/ebm.php';
        break;
    case '/pjst/iab':
        require __DIR__ . '/views/pjst/iab.php';
        break;
    case '/pjst/code-of-ethics':
        require __DIR__ . '/views/pjst/code-of-ethics.php';
        break;
    case '/pjst/copyright':
        require __DIR__ . '/views/pjst/copyright.php';
        break;
    case '/pjst/publishing-charge':
        require __DIR__ . '/views/pjst/publishing-charge.php';
        break;
    case '/pjst/issn':
        require __DIR__ . '/views/pjst/issn.php';
        break;
    case '/pjst/reviewer':
        require __DIR__ . '/views/pjst/reviewer-home.php';
        break;
    case '/pjst/reviewer/become-one':
        require __DIR__ . '/views/pjst/reviewer-become-one.php';
        break;
    case '/pjst/call-for-papers':
        require __DIR__ . '/views/pjst/call-for-papers.php';
        break;
    case '/pjst/indexing':
        require __DIR__ . '/views/pjst/indexing.php';
        break;
    case '/pjst/submission':
        require __DIR__ . '/views/pjst/submission-home.php';
        break;
    case '/pjst/submission/regular-guideline':
        require __DIR__ . '/views/pjst/submission-regular-guideline.php';
        break;
    case '/pjst/submission/regular-online-submission':
        require __DIR__ . '/views/pjst/submission-regular-online.php';
        break;
    case '/pjst/submission/special-guideline':
        require __DIR__ . '/views/pjst/submission-special-guideline.php';
        break;
    case '/pjst/submission/special-proposal-approval':
        require __DIR__ . '/views/pjst/submission-special-approval.php';
        break;
    case '/pjst/browse/regular-issue':
        require __DIR__ . '/views/pjst/browse-regular-issue.php';
        break;
    case '/pjst/browse/regular-issue?decade=' . $decade:
        require __DIR__ . '/views/pjst/browse-regular-issue.php';
        break;
    case '/pjst/browse/regular-issue?decade=' . $decade . '&year=' . $year:
        require __DIR__ . '/views/pjst/browse-regular-issue.php';
        break;
    case '/pjst/browse/regular-issue?decade=' . $decade . '&year=' . $year . '&journal=' . $journal:
        require __DIR__ . '/views/pjst/browse-regular-issue.php';
        break;
    case '/pjst/browse/regular-issue?article=' . $article:
        require __DIR__ . '/views/pjst/view-article.php';
        break;
    case '/pjst/browse/special-issue':
        require __DIR__ . '/views/pjst/browse-special-issue.php';
        break;
    case '/pjst/browse/special-issue?decade=' . $decade:
        require __DIR__ . '/views/pjst/browse-special-issue.php';
        break;
    case '/pjst/browse/special-issue?decade=' . $decade . '&year=' . $year:
        require __DIR__ . '/views/pjst/browse-special-issue.php';
        break;
    case '/pjst/browse/special-issue?decade=' . $decade . '&year=' . $year . '&journal=' . $journal:
        require __DIR__ . '/views/pjst/browse-special-issue.php';
        break;
    case '/pjst/browse/special-issue?article=' . $article:
        require __DIR__ . '/views/pjst/view-article.php';
        break;
    case '/pjst/browse/archives':
        require __DIR__ . '/views/pjst/browse-archives.php';
        break;
    case '/pjst/browse/archives?year=' . $year:
        require __DIR__ . '/views/pjst/browse-archives.php';
        break;
    case '/pjst/browse/archives?journal=' . $journal:
        require __DIR__ . '/views/pjst/browse-archives-issue.php';
        break;
    case '/pjst/browse/archives?article=' . $article:
        require __DIR__ . '/views/pjst/article.php';
        break;
    case '/pjst/scam-alert':
        require __DIR__ . '/views/pjst/scam-alert.php';
        break;
    case '/pjst/webinar':
        require __DIR__ . '/views/pjst/webinar.php';
        break;
    case '/pjst/statistics':
        require __DIR__ . '/views/pjst/statistics.php';
        break;
    case '/pjst/browse/prepress-issue':
        require __DIR__ . '/views/pjst/browse-prepress-issue.php';
        break;
    case '/pjst/browse/prepress-issue?article=' . $article:
        require __DIR__ . '/views/pjst/view-prepress-article.php';
        break;

    case '/pjtas':
        require __DIR__ . '/views/pjtas/index.php';
        break;
    case '/pjtas/introduction':
        require __DIR__ . '/views/pjtas/introduction.php';
        break;
    case '/pjtas/scope':
        require __DIR__ . '/views/pjtas/scope.php';
        break;
    case '/pjtas/processing-time':
        require __DIR__ . '/views/pjtas/processing-time.php';
        break;
    case '/pjtas/peer-review':
        require __DIR__ . '/views/pjtas/peer-review.php';
        break;
    case '/pjtas/ebm':
        require __DIR__ . '/views/pjtas/ebm.php';
        break;
    case '/pjtas/iab':
        require __DIR__ . '/views/pjtas/iab.php';
        break;
    case '/pjtas/code-of-ethics':
        require __DIR__ . '/views/pjtas/code-of-ethics.php';
        break;
    case '/pjtas/copyright':
        require __DIR__ . '/views/pjtas/copyright.php';
        break;
    case '/pjtas/publishing-charge':
        require __DIR__ . '/views/pjtas/publishing-charge.php';
        break;
    case '/pjtas/issn':
        require __DIR__ . '/views/pjtas/issn.php';
        break;
    case '/pjtas/reviewer':
        require __DIR__ . '/views/pjtas/reviewer-home.php';
        break;
    case '/pjtas/reviewer/become-one':
        require __DIR__ . '/views/pjtas/reviewer-become-one.php';
        break;
    case '/pjtas/call-for-papers':
        require __DIR__ . '/views/pjtas/call-for-papers.php';
        break;
    case '/pjtas/indexing':
        require __DIR__ . '/views/pjtas/indexing.php';
        break;
    case '/pjtas/submission':
        require __DIR__ . '/views/pjtas/submission-home.php';
        break;
    case '/pjtas/submission/regular-guideline':
        require __DIR__ . '/views/pjtas/submission-regular-guideline.php';
        break;
    case '/pjtas/submission/regular-online-submission':
        require __DIR__ . '/views/pjtas/submission-regular-online.php';
        break;
    case '/pjtas/submission/special-guideline':
        require __DIR__ . '/views/pjtas/submission-special-guideline.php';
        break;
    case '/pjtas/submission/special-proposal-approval':
        require __DIR__ . '/views/pjtas/submission-special-approval.php';
        break;
    case '/pjtas/browse/regular-issue':
        require __DIR__ . '/views/pjtas/browse-regular-issue.php';
        break;
    case '/pjtas/browse/regular-issue?decade=' . $decade:
        require __DIR__ . '/views/pjtas/browse-regular-issue.php';
        break;
    case '/pjtas/browse/regular-issue?decade=' . $decade . '&year=' . $year:
        require __DIR__ . '/views/pjtas/browse-regular-issue.php';
        break;
    case '/pjtas/browse/regular-issue?decade=' . $decade . '&year=' . $year . '&journal=' . $journal:
        require __DIR__ . '/views/pjtas/browse-regular-issue.php';
        break;
    case '/pjtas/browse/regular-issue?article=' . $article:
        require __DIR__ . '/views/pjtas/view-article.php';
        break;
    case '/pjtas/browse/special-issue':
        require __DIR__ . '/views/pjtas/browse-special-issue.php';
        break;
    case '/pjtas/browse/special-issue?decade=' . $decade:
        require __DIR__ . '/views/pjtas/browse-special-issue.php';
        break;
    case '/pjtas/browse/special-issue?decade=' . $decade . '&year=' . $year:
        require __DIR__ . '/views/pjtas/browse-special-issue.php';
        break;
    case '/pjtas/browse/special-issue?decade=' . $decade . '&year=' . $year . '&journal=' . $journal:
        require __DIR__ . '/views/pjtas/browse-special-issue.php';
        break;
    case '/pjtas/browse/special-issue?article=' . $article:
        require __DIR__ . '/views/pjtas/view-article.php';
        break;
    case '/pjtas/browse/archives':
        require __DIR__ . '/views/pjtas/browse-archives.php';
        break;
    case '/pjtas/browse/archives?year=' . $year:
        require __DIR__ . '/views/pjtas/browse-archives.php';
        break;
    case '/pjtas/browse/archives?journal=' . $journal:
        require __DIR__ . '/views/pjtas/browse-archives-issue.php';
        break;
    case '/pjtas/browse/archives?article=' . $article:
        require __DIR__ . '/views/pjtas/article.php';
        break;
    case '/pjtas/scam-alert':
        require __DIR__ . '/views/pjtas/scam-alert.php';
        break;
    case '/pjtas/webinar':
        require __DIR__ . '/views/pjtas/webinar.php';
        break;
    case '/pjtas/browse/prepress-issue':
        require __DIR__ . '/views/pjtas/browse-prepress-issue.php';
        break;
    case '/pjtas/browse/prepress-issue?article=' . $article:
        require __DIR__ . '/views/pjtas/view-prepress-article.php';
        break;

    case '/pjssh':
        require __DIR__ . '/views/pjssh/index.php';
        break;
    case '/pjssh/introduction':
        require __DIR__ . '/views/pjssh/introduction.php';
        break;
    case '/pjssh/scope':
        require __DIR__ . '/views/pjssh/scope.php';
        break;
    case '/pjssh/processing-time':
        require __DIR__ . '/views/pjssh/processing-time.php';
        break;
    case '/pjssh/peer-review':
        require __DIR__ . '/views/pjssh/peer-review.php';
        break;
    case '/pjssh/ebm':
        require __DIR__ . '/views/pjssh/ebm.php';
        break;
    case '/pjssh/iab':
        require __DIR__ . '/views/pjssh/iab.php';
        break;
    case '/pjssh/code-of-ethics':
        require __DIR__ . '/views/pjssh/code-of-ethics.php';
        break;
    case '/pjssh/copyright':
        require __DIR__ . '/views/pjssh/copyright.php';
        break;
    case '/pjssh/publishing-charge':
        require __DIR__ . '/views/pjssh/publishing-charge.php';
        break;
    case '/pjssh/issn':
        require __DIR__ . '/views/pjssh/issn.php';
        break;
    case '/pjssh/reviewer':
        require __DIR__ . '/views/pjssh/reviewer-home.php';
        break;
    case '/pjssh/reviewer/become-one':
        require __DIR__ . '/views/pjssh/reviewer-become-one.php';
        break;
    case '/pjssh/call-for-papers':
        require __DIR__ . '/views/pjssh/call-for-papers.php';
        break;
    case '/pjssh/indexing':
        require __DIR__ . '/views/pjssh/indexing.php';
        break;
    case '/pjssh/submission':
        require __DIR__ . '/views/pjssh/submission-home.php';
        break;
    case '/pjssh/submission/regular-guideline':
        require __DIR__ . '/views/pjssh/submission-regular-guideline.php';
        break;
    case '/pjssh/submission/regular-online-submission':
        require __DIR__ . '/views/pjssh/submission-regular-online.php';
        break;
    case '/pjssh/submission/special-guideline':
        require __DIR__ . '/views/pjssh/submission-special-guideline.php';
        break;
    case '/pjssh/submission/special-proposal-approval':
        require __DIR__ . '/views/pjssh/submission-special-approval.php';
        break;
    case '/pjssh/browse/regular-issue':
        require __DIR__ . '/views/pjssh/browse-regular-issue.php';
        break;
    case '/pjssh/browse/regular-issue?decade=' . $decade:
        require __DIR__ . '/views/pjssh/browse-regular-issue.php';
        break;
    case '/pjssh/browse/regular-issue?decade=' . $decade . '&year=' . $year:
        require __DIR__ . '/views/pjssh/browse-regular-issue.php';
        break;
    case '/pjssh/browse/regular-issue?decade=' . $decade . '&year=' . $year . '&journal=' . $journal:
        require __DIR__ . '/views/pjssh/browse-regular-issue.php';
        break;
    case '/pjssh/browse/regular-issue?article=' . $article:
        require __DIR__ . '/views/pjssh/view-article.php';
        break;
    case '/pjssh/browse/special-issue':
        require __DIR__ . '/views/pjssh/browse-special-issue.php';
        break;
    case '/pjssh/browse/special-issue?decade=' . $decade:
        require __DIR__ . '/views/pjssh/browse-special-issue.php';
        break;
    case '/pjssh/browse/special-issue?decade=' . $decade . '&year=' . $year:
        require __DIR__ . '/views/pjssh/browse-special-issue.php';
        break;
    case '/pjssh/browse/special-issue?decade=' . $decade . '&year=' . $year . '&journal=' . $journal:
        require __DIR__ . '/views/pjssh/browse-special-issue.php';
        break;
    case '/pjssh/browse/special-issue?article=' . $article:
        require __DIR__ . '/views/pjssh/view-article.php';
        break;
    case '/pjssh/browse/prepress-issue':
        require __DIR__ . '/views/pjssh/browse-prepress-issue.php';
        break;
    case '/pjssh/browse/prepress-issue?article=' . $article:
        require __DIR__ . '/views/pjssh/view-prepress-article.php';
        break;
    case '/pjssh/scam-alert':
        require __DIR__ . '/views/pjssh/scam-alert.php';
        break;
    case '/pjssh/statistics':
        require __DIR__ . '/views/pjssh/statistics.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/views/404.html';
        break;
}
