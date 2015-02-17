


<!DOCTYPE html>
<html lang="en" class="">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    
    
    <title>password_compat/password.php at master · ircmaxell/password_compat · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub">
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png">
    <meta property="fb:app_id" content="1401488693436528">

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="ircmaxell/password_compat" name="twitter:title" /><meta content="password_compat - Compatibility with the password_* functions being worked on for PHP 5.5" name="twitter:description" /><meta content="https://avatars3.githubusercontent.com/u/660654?v=3&amp;s=400" name="twitter:image:src" />
      <meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://avatars3.githubusercontent.com/u/660654?v=3&amp;s=400" property="og:image" /><meta content="ircmaxell/password_compat" property="og:title" /><meta content="https://github.com/ircmaxell/password_compat" property="og:url" /><meta content="password_compat - Compatibility with the password_* functions being worked on for PHP 5.5" property="og:description" />
      <meta name="browser-stats-url" content="/_stats">
    <link rel="assets" href="https://assets-cdn.github.com/">
    <link rel="conduit-xhr" href="https://ghconduit.com:25035">
    
    <meta name="pjax-timeout" content="1000">
    

    <meta name="msapplication-TileImage" content="/windows-tile.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="selected-link" value="repo_source" data-pjax-transient>
      <meta name="google-analytics" content="UA-3769691-2">

    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="github" name="octolytics-app-id" /><meta content="AC38275A:72C6:1DC11052:54E37D59" name="octolytics-dimension-request_id" />
    
    <meta content="Rails, view, blob#show" name="analytics-event" />

    
    
    <link rel="icon" type="image/x-icon" href="https://assets-cdn.github.com/favicon.ico">


    <meta content="authenticity_token" name="csrf-param" />
<meta content="OZG98llINE3CTaj7bJOmn+daeX1RWmxM+vPBDpyXS+1dYgFNmOsaLO9BovgiOMXl3uDBn2oSS9WjNf+oq8OWew==" name="csrf-token" />

    <link href="https://assets-cdn.github.com/assets/github-e379d049694b67b71a25ea04f1732c6994cf0a225d11e59f71a379e2553945cd.css" media="all" rel="stylesheet" />
    <link href="https://assets-cdn.github.com/assets/github2-768feef36a8ca916fedf4fa665c759914843a73417b17f0f17bbc71c06ca17e5.css" media="all" rel="stylesheet" />
    
    


    <meta http-equiv="x-pjax-version" content="5f320a648f8b64a23067b2a7f18799ef">

      
  <meta name="description" content="password_compat - Compatibility with the password_* functions being worked on for PHP 5.5">
  <meta name="go-import" content="github.com/ircmaxell/password_compat git https://github.com/ircmaxell/password_compat.git">

  <meta content="660654" name="octolytics-dimension-user_id" /><meta content="ircmaxell" name="octolytics-dimension-user_login" /><meta content="4782634" name="octolytics-dimension-repository_id" /><meta content="ircmaxell/password_compat" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="4782634" name="octolytics-dimension-repository_network_root_id" /><meta content="ircmaxell/password_compat" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/ircmaxell/password_compat/commits/master.atom" rel="alternate" title="Recent Commits to password_compat:master" type="application/atom+xml">

  </head>


  <body class="logged_out  env-production  vis-public page-blob">
    <a href="#start-of-content" tabindex="1" class="accessibility-aid js-skip-to-content">Skip to content</a>
    <div class="wrapper">
      
      
      
      


      
      <div class="header header-logged-out" role="banner">
  <div class="container clearfix">

    <a class="header-logo-wordmark" href="https://github.com/" data-ga-click="(Logged out) Header, go to homepage, icon:logo-wordmark">
      <span class="mega-octicon octicon-logo-github"></span>
    </a>

    <div class="header-actions" role="navigation">
        <a class="button primary" href="/join" data-ga-click="(Logged out) Header, clicked Sign up, text:sign-up">Sign up</a>
      <a class="button" href="/login?return_to=%2Fircmaxell%2Fpassword_compat%2Fblob%2Fmaster%2Flib%2Fpassword.php" data-ga-click="(Logged out) Header, clicked Sign in, text:sign-in">Sign in</a>
    </div>

    <div class="site-search repo-scope js-site-search" role="search">
      <form accept-charset="UTF-8" action="/ircmaxell/password_compat/search" class="js-site-search-form" data-global-search-url="/search" data-repo-search-url="/ircmaxell/password_compat/search" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
  <input type="text"
    class="js-site-search-field is-clearable"
    data-hotkey="s"
    name="q"
    placeholder="Search"
    data-global-scope-placeholder="Search GitHub"
    data-repo-scope-placeholder="Search"
    tabindex="1"
    autocapitalize="off">
  <div class="scope-badge">This repository</div>
</form>
    </div>

      <ul class="header-nav left" role="navigation">
          <li class="header-nav-item">
            <a class="header-nav-link" href="/explore" data-ga-click="(Logged out) Header, go to explore, text:explore">Explore</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="/features" data-ga-click="(Logged out) Header, go to features, text:features">Features</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="https://enterprise.github.com/" data-ga-click="(Logged out) Header, go to enterprise, text:enterprise">Enterprise</a>
          </li>
          <li class="header-nav-item">
            <a class="header-nav-link" href="/blog" data-ga-click="(Logged out) Header, go to blog, text:blog">Blog</a>
          </li>
      </ul>

  </div>
</div>



      <div id="start-of-content" class="accessibility-aid"></div>
          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    <div id="js-flash-container">
      
    </div>
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">
        
<ul class="pagehead-actions">

  <li>
      <a href="/login?return_to=%2Fircmaxell%2Fpassword_compat"
    class="minibutton with-count tooltipped tooltipped-n"
    aria-label="You must be signed in to watch a repository" rel="nofollow">
    <span class="octicon octicon-eye"></span>
    Watch
  </a>
  <a class="social-count" href="/ircmaxell/password_compat/watchers">
    125
  </a>


  </li>

  <li>
      <a href="/login?return_to=%2Fircmaxell%2Fpassword_compat"
    class="minibutton with-count tooltipped tooltipped-n"
    aria-label="You must be signed in to star a repository" rel="nofollow">
    <span class="octicon octicon-star"></span>
    Star
  </a>

    <a class="social-count js-social-count" href="/ircmaxell/password_compat/stargazers">
      1,266
    </a>

  </li>

    <li>
      <a href="/login?return_to=%2Fircmaxell%2Fpassword_compat"
        class="minibutton with-count tooltipped tooltipped-n"
        aria-label="You must be signed in to fork a repository" rel="nofollow">
        <span class="octicon octicon-repo-forked"></span>
        Fork
      </a>
      <a href="/ircmaxell/password_compat/network" class="social-count">
        221
      </a>
    </li>
</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
          <span class="mega-octicon octicon-repo"></span>
          <span class="author"><a href="/ircmaxell" class="url fn" itemprop="url" rel="author"><span itemprop="title">ircmaxell</span></a></span><!--
       --><span class="path-divider">/</span><!--
       --><strong><a href="/ircmaxell/password_compat" class="js-current-repository" data-pjax="#js-repo-pjax-container">password_compat</a></strong>

          <span class="page-context-loader">
            <img alt="" height="16" src="https://assets-cdn.github.com/assets/spinners/octocat-spinner-32-e513294efa576953719e4e2de888dd9cf929b7d62ed8d05f25e731d02452ab6c.gif" width="16" />
          </span>

        </h1>
      </div><!-- /.container -->
    </div><!-- /.repohead -->

    <div class="container">
      <div class="repository-with-sidebar repo-container new-discussion-timeline  ">
        <div class="repository-sidebar clearfix">
            
<nav class="sunken-menu repo-nav js-repo-nav js-sidenav-container-pjax js-octicon-loaders"
     role="navigation"
     data-pjax="#js-repo-pjax-container"
     data-issue-count-url="/ircmaxell/password_compat/issues/counts">
  <ul class="sunken-menu-group">
    <li class="tooltipped tooltipped-w" aria-label="Code">
      <a href="/ircmaxell/password_compat" aria-label="Code" class="selected js-selected-navigation-item sunken-menu-item" data-hotkey="g c" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches /ircmaxell/password_compat">
        <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
        <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/assets/spinners/octocat-spinner-32-e513294efa576953719e4e2de888dd9cf929b7d62ed8d05f25e731d02452ab6c.gif" width="16" />
</a>    </li>

      <li class="tooltipped tooltipped-w" aria-label="Issues">
        <a href="/ircmaxell/password_compat/issues" aria-label="Issues" class="js-selected-navigation-item sunken-menu-item" data-hotkey="g i" data-selected-links="repo_issues repo_labels repo_milestones /ircmaxell/password_compat/issues">
          <span class="octicon octicon-issue-opened"></span> <span class="full-word">Issues</span>
          <span class="js-issue-replace-counter"></span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/assets/spinners/octocat-spinner-32-e513294efa576953719e4e2de888dd9cf929b7d62ed8d05f25e731d02452ab6c.gif" width="16" />
</a>      </li>

    <li class="tooltipped tooltipped-w" aria-label="Pull Requests">
      <a href="/ircmaxell/password_compat/pulls" aria-label="Pull Requests" class="js-selected-navigation-item sunken-menu-item" data-hotkey="g p" data-selected-links="repo_pulls /ircmaxell/password_compat/pulls">
          <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull Requests</span>
          <span class="js-pull-replace-counter"></span>
          <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/assets/spinners/octocat-spinner-32-e513294efa576953719e4e2de888dd9cf929b7d62ed8d05f25e731d02452ab6c.gif" width="16" />
</a>    </li>


  </ul>
  <div class="sunken-menu-separator"></div>
  <ul class="sunken-menu-group">

    <li class="tooltipped tooltipped-w" aria-label="Pulse">
      <a href="/ircmaxell/password_compat/pulse" aria-label="Pulse" class="js-selected-navigation-item sunken-menu-item" data-selected-links="pulse /ircmaxell/password_compat/pulse">
        <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
        <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/assets/spinners/octocat-spinner-32-e513294efa576953719e4e2de888dd9cf929b7d62ed8d05f25e731d02452ab6c.gif" width="16" />
</a>    </li>

    <li class="tooltipped tooltipped-w" aria-label="Graphs">
      <a href="/ircmaxell/password_compat/graphs" aria-label="Graphs" class="js-selected-navigation-item sunken-menu-item" data-selected-links="repo_graphs repo_contributors /ircmaxell/password_compat/graphs">
        <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
        <img alt="" class="mini-loader" height="16" src="https://assets-cdn.github.com/assets/spinners/octocat-spinner-32-e513294efa576953719e4e2de888dd9cf929b7d62ed8d05f25e731d02452ab6c.gif" width="16" />
</a>    </li>
  </ul>


</nav>

              <div class="only-with-full-nav">
                  
<div class="clone-url open"
  data-protocol-type="http"
  data-url="/users/set_protocol?protocol_selector=http&amp;protocol_type=clone">
  <h3><span class="text-emphasized">HTTPS</span> clone URL</h3>
  <div class="input-group js-zeroclipboard-container">
    <input type="text" class="input-mini input-monospace js-url-field js-zeroclipboard-target"
           value="https://github.com/ircmaxell/password_compat.git" readonly="readonly">
    <span class="input-group-button">
      <button aria-label="Copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>

  
<div class="clone-url "
  data-protocol-type="subversion"
  data-url="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=clone">
  <h3><span class="text-emphasized">Subversion</span> checkout URL</h3>
  <div class="input-group js-zeroclipboard-container">
    <input type="text" class="input-mini input-monospace js-url-field js-zeroclipboard-target"
           value="https://github.com/ircmaxell/password_compat" readonly="readonly">
    <span class="input-group-button">
      <button aria-label="Copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>



<p class="clone-options">You can clone with
  <a href="#" class="js-clone-selector" data-protocol="http">HTTPS</a> or <a href="#" class="js-clone-selector" data-protocol="subversion">Subversion</a>.
  <a href="https://help.github.com/articles/which-remote-url-should-i-use" class="help tooltipped tooltipped-n" aria-label="Get help on which URL is right for you.">
    <span class="octicon octicon-question"></span>
  </a>
</p>



                <a href="/ircmaxell/password_compat/archive/master.zip"
                   class="minibutton sidebar-button"
                   aria-label="Download the contents of ircmaxell/password_compat as a zip file"
                   title="Download the contents of ircmaxell/password_compat as a zip file"
                   rel="nofollow">
                  <span class="octicon octicon-cloud-download"></span>
                  Download ZIP
                </a>
              </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>
          

<a href="/ircmaxell/password_compat/blob/c859f7c11ef51f3a7bc5527b3df3f3830b620b0d/lib/password.php" class="hidden js-permalink-shortcut" data-hotkey="y">Permalink</a>

<!-- blob contrib key: blob_contributors:v21:3abd9765e5ab7feb0d086c909dedfc11 -->

<div class="file-navigation js-zeroclipboard-container">
  
<div class="select-menu js-menu-container js-select-menu left">
  <span class="minibutton select-menu-button js-menu-target css-truncate" data-hotkey="w"
    data-master-branch="master"
    data-ref="master"
    title="master"
    role="button" aria-label="Switch branches or tags" tabindex="0" aria-haspopup="true">
    <span class="octicon octicon-git-branch"></span>
    <i>branch:</i>
    <span class="js-select-button css-truncate-target">master</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax aria-hidden="true">

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-x js-menu-close" role="button" aria-label="Close"></span>
      </div>

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" data-filter-placeholder="Filter branches/tags" class="js-select-menu-tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" data-filter-placeholder="Find a tag…" class="js-select-menu-tab">Tags</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item selected">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/ircmaxell/password_compat/blob/master/lib/password.php"
                 data-name="master"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="master">master</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/ircmaxell/password_compat/blob/nicholas-grekas-xor-fix/lib/password.php"
                 data-name="nicholas-grekas-xor-fix"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="nicholas-grekas-xor-fix">nicholas-grekas-xor-fix</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/ircmaxell/password_compat/blob/v1.0/lib/password.php"
                 data-name="v1.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v1.0">v1.0</a>
            </div>
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div>

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/ircmaxell/password_compat/tree/v1.0.4/lib/password.php"
                 data-name="v1.0.4"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v1.0.4">v1.0.4</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/ircmaxell/password_compat/tree/v1.0.3/lib/password.php"
                 data-name="v1.0.3"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v1.0.3">v1.0.3</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/ircmaxell/password_compat/tree/v1.0.2/lib/password.php"
                 data-name="v1.0.2"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v1.0.2">v1.0.2</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/ircmaxell/password_compat/tree/v1.0.1/lib/password.php"
                 data-name="v1.0.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v1.0.1">v1.0.1</a>
            </div>
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/ircmaxell/password_compat/tree/v1.0.0/lib/password.php"
                 data-name="v1.0.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text css-truncate-target"
                 title="v1.0.0">v1.0.0</a>
            </div>
        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div>

    </div>
  </div>
</div>

  <div class="button-group right">
    <a href="/ircmaxell/password_compat/find/master"
          class="js-show-file-finder minibutton empty-icon tooltipped tooltipped-s"
          data-pjax
          data-hotkey="t"
          aria-label="Quickly jump between files">
      <span class="octicon octicon-list-unordered"></span>
    </a>
    <button aria-label="Copy file path to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-copied-hint="Copied!" type="button"><span class="octicon octicon-clippy"></span></button>
  </div>

  <div class="breadcrumb js-zeroclipboard-target">
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/ircmaxell/password_compat" class="" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">password_compat</span></a></span></span><span class="separator">/</span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/ircmaxell/password_compat/tree/master/lib" class="" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">lib</span></a></span><span class="separator">/</span><strong class="final-path">password.php</strong>
  </div>
</div>


  <div class="commit file-history-tease">
    <div class="file-history-tease-header">
        <img alt="Beth Tucker Long" class="avatar" data-user="1811561" height="24" src="https://avatars1.githubusercontent.com/u/1811561?v=3&amp;s=48" width="24" />
        <span class="author"><a href="/e3betht" rel="contributor">e3betht</a></span>
        <time datetime="2015-01-06T19:51:56Z" is="relative-time">Jan 6, 2015</time>
        <div class="commit-title">
            <a href="/ircmaxell/password_compat/commit/37491854b2d5cb6bc06e4353fc0510ea11f7cea6" class="message" data-pjax="true" title="Adjusted variable names that were too long or too short">Adjusted variable names that were too long or too short</a>
        </div>
    </div>

    <div class="participation">
      <p class="quickstat">
        <a href="#blob_contributors_box" rel="facebox">
          <strong>11</strong>
           contributors
        </a>
      </p>
          <a class="avatar-link tooltipped tooltipped-s" aria-label="ircmaxell" href="/ircmaxell/password_compat/commits/master/lib/password.php?author=ircmaxell"><img alt="Anthony Ferrara" class="avatar" data-user="660654" height="20" src="https://avatars0.githubusercontent.com/u/660654?v=3&amp;s=40" width="20" /></a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="Jacques1" href="/ircmaxell/password_compat/commits/master/lib/password.php?author=Jacques1"><img alt="Jacques1" class="avatar" data-user="6070504" height="20" src="https://avatars1.githubusercontent.com/u/6070504?v=3&amp;s=40" width="20" /></a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="nicolas-grekas" href="/ircmaxell/password_compat/commits/master/lib/password.php?author=nicolas-grekas"><img alt="Nicolas Grekas" class="avatar" data-user="243674" height="20" src="https://avatars1.githubusercontent.com/u/243674?v=3&amp;s=40" width="20" /></a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="s9e" href="/ircmaxell/password_compat/commits/master/lib/password.php?author=s9e"><img alt="Josh Davis" class="avatar" data-user="317712" height="20" src="https://avatars1.githubusercontent.com/u/317712?v=3&amp;s=40" width="20" /></a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="johncongdon" href="/ircmaxell/password_compat/commits/master/lib/password.php?author=johncongdon"><img alt="John Congdon" class="avatar" data-user="67472" height="20" src="https://avatars1.githubusercontent.com/u/67472?v=3&amp;s=40" width="20" /></a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="lt" href="/ircmaxell/password_compat/commits/master/lib/password.php?author=lt"><img alt="Leigh" class="avatar" data-user="1503065" height="20" src="https://avatars0.githubusercontent.com/u/1503065?v=3&amp;s=40" width="20" /></a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="patrickallaert" href="/ircmaxell/password_compat/commits/master/lib/password.php?author=patrickallaert"><img alt="Patrick Allaert" class="avatar" data-user="195277" height="20" src="https://avatars2.githubusercontent.com/u/195277?v=3&amp;s=40" width="20" /></a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="multiwebinc" href="/ircmaxell/password_compat/commits/master/lib/password.php?author=multiwebinc"><img alt="multiwebinc" class="avatar" data-user="901732" height="20" src="https://avatars1.githubusercontent.com/u/901732?v=3&amp;s=40" width="20" /></a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="remicollet" href="/ircmaxell/password_compat/commits/master/lib/password.php?author=remicollet"><img alt="Remi Collet" class="avatar" data-user="270445" height="20" src="https://avatars0.githubusercontent.com/u/270445?v=3&amp;s=40" width="20" /></a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="bcremer" href="/ircmaxell/password_compat/commits/master/lib/password.php?author=bcremer"><img alt="Benjamin Cremer" class="avatar" data-user="55820" height="20" src="https://avatars3.githubusercontent.com/u/55820?v=3&amp;s=40" width="20" /></a>
    <a class="avatar-link tooltipped tooltipped-s" aria-label="e3betht" href="/ircmaxell/password_compat/commits/master/lib/password.php?author=e3betht"><img alt="Beth Tucker Long" class="avatar" data-user="1811561" height="20" src="https://avatars3.githubusercontent.com/u/1811561?v=3&amp;s=40" width="20" /></a>


    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2 class="facebox-header">Users who have contributed to this file</h2>
      <ul class="facebox-user-list">
          <li class="facebox-user-list-item">
            <img alt="Anthony Ferrara" data-user="660654" height="24" src="https://avatars2.githubusercontent.com/u/660654?v=3&amp;s=48" width="24" />
            <a href="/ircmaxell">ircmaxell</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Jacques1" data-user="6070504" height="24" src="https://avatars3.githubusercontent.com/u/6070504?v=3&amp;s=48" width="24" />
            <a href="/Jacques1">Jacques1</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Nicolas Grekas" data-user="243674" height="24" src="https://avatars3.githubusercontent.com/u/243674?v=3&amp;s=48" width="24" />
            <a href="/nicolas-grekas">nicolas-grekas</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Josh Davis" data-user="317712" height="24" src="https://avatars3.githubusercontent.com/u/317712?v=3&amp;s=48" width="24" />
            <a href="/s9e">s9e</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="John Congdon" data-user="67472" height="24" src="https://avatars3.githubusercontent.com/u/67472?v=3&amp;s=48" width="24" />
            <a href="/johncongdon">johncongdon</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Leigh" data-user="1503065" height="24" src="https://avatars2.githubusercontent.com/u/1503065?v=3&amp;s=48" width="24" />
            <a href="/lt">lt</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Patrick Allaert" data-user="195277" height="24" src="https://avatars0.githubusercontent.com/u/195277?v=3&amp;s=48" width="24" />
            <a href="/patrickallaert">patrickallaert</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="multiwebinc" data-user="901732" height="24" src="https://avatars3.githubusercontent.com/u/901732?v=3&amp;s=48" width="24" />
            <a href="/multiwebinc">multiwebinc</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Remi Collet" data-user="270445" height="24" src="https://avatars2.githubusercontent.com/u/270445?v=3&amp;s=48" width="24" />
            <a href="/remicollet">remicollet</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Benjamin Cremer" data-user="55820" height="24" src="https://avatars1.githubusercontent.com/u/55820?v=3&amp;s=48" width="24" />
            <a href="/bcremer">bcremer</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Beth Tucker Long" data-user="1811561" height="24" src="https://avatars1.githubusercontent.com/u/1811561?v=3&amp;s=48" width="24" />
            <a href="/e3betht">e3betht</a>
          </li>
      </ul>
    </div>
  </div>

<div class="file-box">
  <div class="file">
    <div class="meta clearfix">
      <div class="info file-name">
          <span>314 lines (292 sloc)</span>
          <span class="meta-divider"></span>
        <span>12.438 kb</span>
      </div>
      <div class="actions">
        <div class="button-group">
          <a href="/ircmaxell/password_compat/raw/master/lib/password.php" class="minibutton " id="raw-url">Raw</a>
            <a href="/ircmaxell/password_compat/blame/master/lib/password.php" class="minibutton js-update-url-with-hash">Blame</a>
          <a href="/ircmaxell/password_compat/commits/master/lib/password.php" class="minibutton " rel="nofollow">History</a>
        </div><!-- /.button-group -->


            <a class="octicon-button disabled tooltipped tooltipped-w" href="#"
               aria-label="You must be signed in to make or propose changes"><span class="octicon octicon-pencil"></span></a>

          <a class="octicon-button danger disabled tooltipped tooltipped-w" href="#"
             aria-label="You must be signed in to make or propose changes">
          <span class="octicon octicon-trashcan"></span>
        </a>
      </div><!-- /.actions -->
    </div>
    

  <div class="blob-wrapper data type-php">
      <table class="highlight tab-size-8 js-file-line-container">
      <tr>
        <td id="L1" class="blob-num js-line-number" data-line-number="1"></td>
        <td id="LC1" class="blob-code js-file-line"><span class="pl-pse">&lt;?php</span><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L2" class="blob-num js-line-number" data-line-number="2"></td>
        <td id="LC2" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">/**</span></span></td>
      </tr>
      <tr>
        <td id="L3" class="blob-num js-line-number" data-line-number="3"></td>
        <td id="LC3" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c"> * A Compatibility library with PHP 5.5&#39;s simplified password hashing API.</span></span></td>
      </tr>
      <tr>
        <td id="L4" class="blob-num js-line-number" data-line-number="4"></td>
        <td id="LC4" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c"> *</span></span></td>
      </tr>
      <tr>
        <td id="L5" class="blob-num js-line-number" data-line-number="5"></td>
        <td id="LC5" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c"> * <span class="pl-k">@author</span> Anthony Ferrara &lt;ircmaxell@php.net&gt;</span></span></td>
      </tr>
      <tr>
        <td id="L6" class="blob-num js-line-number" data-line-number="6"></td>
        <td id="LC6" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c"> * <span class="pl-k">@license</span> http://www.opensource.org/licenses/mit-license.html MIT License</span></span></td>
      </tr>
      <tr>
        <td id="L7" class="blob-num js-line-number" data-line-number="7"></td>
        <td id="LC7" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c"> * <span class="pl-k">@copyright</span> 2012 The Authors</span></span></td>
      </tr>
      <tr>
        <td id="L8" class="blob-num js-line-number" data-line-number="8"></td>
        <td id="LC8" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c"> */</span></span></td>
      </tr>
      <tr>
        <td id="L9" class="blob-num js-line-number" data-line-number="9"></td>
        <td id="LC9" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L10" class="blob-num js-line-number" data-line-number="10"></td>
        <td id="LC10" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c1">namespace</span> {</span></td>
      </tr>
      <tr>
        <td id="L11" class="blob-num js-line-number" data-line-number="11"></td>
        <td id="LC11" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L12" class="blob-num js-line-number" data-line-number="12"></td>
        <td id="LC12" class="blob-code js-file-line"><span class="pl-s2">    <span class="pl-k">if</span> (<span class="pl-k">!</span><span class="pl-s3">defined</span>(<span class="pl-s1"><span class="pl-pds">&#39;</span>PASSWORD_BCRYPT<span class="pl-pds">&#39;</span></span>)) {</span></td>
      </tr>
      <tr>
        <td id="L13" class="blob-num js-line-number" data-line-number="13"></td>
        <td id="LC13" class="blob-code js-file-line"><span class="pl-s2">        <span class="pl-c">/**</span></span></td>
      </tr>
      <tr>
        <td id="L14" class="blob-num js-line-number" data-line-number="14"></td>
        <td id="LC14" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * PHPUnit Process isolation caches constants, but not function declarations.</span></span></td>
      </tr>
      <tr>
        <td id="L15" class="blob-num js-line-number" data-line-number="15"></td>
        <td id="LC15" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * So we need to check if the constants are defined separately from </span></span></td>
      </tr>
      <tr>
        <td id="L16" class="blob-num js-line-number" data-line-number="16"></td>
        <td id="LC16" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * the functions to enable supporting process isolation in userland</span></span></td>
      </tr>
      <tr>
        <td id="L17" class="blob-num js-line-number" data-line-number="17"></td>
        <td id="LC17" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * code.</span></span></td>
      </tr>
      <tr>
        <td id="L18" class="blob-num js-line-number" data-line-number="18"></td>
        <td id="LC18" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         */</span></span></td>
      </tr>
      <tr>
        <td id="L19" class="blob-num js-line-number" data-line-number="19"></td>
        <td id="LC19" class="blob-code js-file-line"><span class="pl-s2">        <span class="pl-s3">define</span>(<span class="pl-s1"><span class="pl-pds">&#39;</span>PASSWORD_BCRYPT<span class="pl-pds">&#39;</span></span>, <span class="pl-c1">1</span>);</span></td>
      </tr>
      <tr>
        <td id="L20" class="blob-num js-line-number" data-line-number="20"></td>
        <td id="LC20" class="blob-code js-file-line"><span class="pl-s2">        <span class="pl-s3">define</span>(<span class="pl-s1"><span class="pl-pds">&#39;</span>PASSWORD_DEFAULT<span class="pl-pds">&#39;</span></span>, <span class="pl-c1">PASSWORD_BCRYPT</span>);</span></td>
      </tr>
      <tr>
        <td id="L21" class="blob-num js-line-number" data-line-number="21"></td>
        <td id="LC21" class="blob-code js-file-line"><span class="pl-s2">        <span class="pl-s3">define</span>(<span class="pl-s1"><span class="pl-pds">&#39;</span>PASSWORD_BCRYPT_DEFAULT_COST<span class="pl-pds">&#39;</span></span>, <span class="pl-c1">10</span>);</span></td>
      </tr>
      <tr>
        <td id="L22" class="blob-num js-line-number" data-line-number="22"></td>
        <td id="LC22" class="blob-code js-file-line"><span class="pl-s2">    }</span></td>
      </tr>
      <tr>
        <td id="L23" class="blob-num js-line-number" data-line-number="23"></td>
        <td id="LC23" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L24" class="blob-num js-line-number" data-line-number="24"></td>
        <td id="LC24" class="blob-code js-file-line"><span class="pl-s2">    <span class="pl-k">if</span> (<span class="pl-k">!</span><span class="pl-s3">function_exists</span>(<span class="pl-s1"><span class="pl-pds">&#39;</span>password_hash<span class="pl-pds">&#39;</span></span>)) {</span></td>
      </tr>
      <tr>
        <td id="L25" class="blob-num js-line-number" data-line-number="25"></td>
        <td id="LC25" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L26" class="blob-num js-line-number" data-line-number="26"></td>
        <td id="LC26" class="blob-code js-file-line"><span class="pl-s2">        <span class="pl-c">/**</span></span></td>
      </tr>
      <tr>
        <td id="L27" class="blob-num js-line-number" data-line-number="27"></td>
        <td id="LC27" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * Hash the password using the specified algorithm</span></span></td>
      </tr>
      <tr>
        <td id="L28" class="blob-num js-line-number" data-line-number="28"></td>
        <td id="LC28" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         *</span></span></td>
      </tr>
      <tr>
        <td id="L29" class="blob-num js-line-number" data-line-number="29"></td>
        <td id="LC29" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * <span class="pl-k">@param</span> string $password The password to hash</span></span></td>
      </tr>
      <tr>
        <td id="L30" class="blob-num js-line-number" data-line-number="30"></td>
        <td id="LC30" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * <span class="pl-k">@param</span> int    $algo     The algorithm to use (Defined by PASSWORD_* constants)</span></span></td>
      </tr>
      <tr>
        <td id="L31" class="blob-num js-line-number" data-line-number="31"></td>
        <td id="LC31" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * <span class="pl-k">@param</span> array  $options  The options for the algorithm to use</span></span></td>
      </tr>
      <tr>
        <td id="L32" class="blob-num js-line-number" data-line-number="32"></td>
        <td id="LC32" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         *</span></span></td>
      </tr>
      <tr>
        <td id="L33" class="blob-num js-line-number" data-line-number="33"></td>
        <td id="LC33" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * <span class="pl-k">@return</span> string|false The hashed password, or false on error.</span></span></td>
      </tr>
      <tr>
        <td id="L34" class="blob-num js-line-number" data-line-number="34"></td>
        <td id="LC34" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         */</span></span></td>
      </tr>
      <tr>
        <td id="L35" class="blob-num js-line-number" data-line-number="35"></td>
        <td id="LC35" class="blob-code js-file-line"><span class="pl-s2">        <span class="pl-st">function</span> <span class="pl-en">password_hash</span>(<span class="pl-vo">$password</span>, <span class="pl-vo">$algo</span>, <span class="pl-st">array</span> <span class="pl-vo">$options</span> <span class="pl-k">=</span> <span class="pl-s3">array</span>()) {</span></td>
      </tr>
      <tr>
        <td id="L36" class="blob-num js-line-number" data-line-number="36"></td>
        <td id="LC36" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-k">if</span> (<span class="pl-k">!</span><span class="pl-s3">function_exists</span>(<span class="pl-s1"><span class="pl-pds">&#39;</span>crypt<span class="pl-pds">&#39;</span></span>)) {</span></td>
      </tr>
      <tr>
        <td id="L37" class="blob-num js-line-number" data-line-number="37"></td>
        <td id="LC37" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-s3">trigger_error</span>(<span class="pl-s1"><span class="pl-pds">&quot;</span>Crypt must be loaded for password_hash to function<span class="pl-pds">&quot;</span></span>, <span class="pl-sc">E_USER_WARNING</span>);</span></td>
      </tr>
      <tr>
        <td id="L38" class="blob-num js-line-number" data-line-number="38"></td>
        <td id="LC38" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-k">return</span> <span class="pl-c1">null</span>;</span></td>
      </tr>
      <tr>
        <td id="L39" class="blob-num js-line-number" data-line-number="39"></td>
        <td id="LC39" class="blob-code js-file-line"><span class="pl-s2">            }</span></td>
      </tr>
      <tr>
        <td id="L40" class="blob-num js-line-number" data-line-number="40"></td>
        <td id="LC40" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-k">if</span> (<span class="pl-s3">is_null</span>(<span class="pl-vo">$password</span>) <span class="pl-k">||</span> <span class="pl-s3">is_int</span>(<span class="pl-vo">$password</span>)) {</span></td>
      </tr>
      <tr>
        <td id="L41" class="blob-num js-line-number" data-line-number="41"></td>
        <td id="LC41" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-vo">$password</span> <span class="pl-k">=</span> (<span class="pl-st">string</span>) <span class="pl-vo">$password</span>;</span></td>
      </tr>
      <tr>
        <td id="L42" class="blob-num js-line-number" data-line-number="42"></td>
        <td id="LC42" class="blob-code js-file-line"><span class="pl-s2">            }</span></td>
      </tr>
      <tr>
        <td id="L43" class="blob-num js-line-number" data-line-number="43"></td>
        <td id="LC43" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-k">if</span> (<span class="pl-k">!</span><span class="pl-s3">is_string</span>(<span class="pl-vo">$password</span>)) {</span></td>
      </tr>
      <tr>
        <td id="L44" class="blob-num js-line-number" data-line-number="44"></td>
        <td id="LC44" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-s3">trigger_error</span>(<span class="pl-s1"><span class="pl-pds">&quot;</span>password_hash(): Password must be a string<span class="pl-pds">&quot;</span></span>, <span class="pl-sc">E_USER_WARNING</span>);</span></td>
      </tr>
      <tr>
        <td id="L45" class="blob-num js-line-number" data-line-number="45"></td>
        <td id="LC45" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-k">return</span> <span class="pl-c1">null</span>;</span></td>
      </tr>
      <tr>
        <td id="L46" class="blob-num js-line-number" data-line-number="46"></td>
        <td id="LC46" class="blob-code js-file-line"><span class="pl-s2">            }</span></td>
      </tr>
      <tr>
        <td id="L47" class="blob-num js-line-number" data-line-number="47"></td>
        <td id="LC47" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-k">if</span> (<span class="pl-k">!</span><span class="pl-s3">is_int</span>(<span class="pl-vo">$algo</span>)) {</span></td>
      </tr>
      <tr>
        <td id="L48" class="blob-num js-line-number" data-line-number="48"></td>
        <td id="LC48" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-s3">trigger_error</span>(<span class="pl-s1"><span class="pl-pds">&quot;</span>password_hash() expects parameter 2 to be long, <span class="pl-pds">&quot;</span></span> <span class="pl-k">.</span> <span class="pl-s3">gettype</span>(<span class="pl-vo">$algo</span>) <span class="pl-k">.</span> <span class="pl-s1"><span class="pl-pds">&quot;</span> given<span class="pl-pds">&quot;</span></span>, <span class="pl-sc">E_USER_WARNING</span>);</span></td>
      </tr>
      <tr>
        <td id="L49" class="blob-num js-line-number" data-line-number="49"></td>
        <td id="LC49" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-k">return</span> <span class="pl-c1">null</span>;</span></td>
      </tr>
      <tr>
        <td id="L50" class="blob-num js-line-number" data-line-number="50"></td>
        <td id="LC50" class="blob-code js-file-line"><span class="pl-s2">            }</span></td>
      </tr>
      <tr>
        <td id="L51" class="blob-num js-line-number" data-line-number="51"></td>
        <td id="LC51" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-vo">$resultLength</span> <span class="pl-k">=</span> <span class="pl-c1">0</span>;</span></td>
      </tr>
      <tr>
        <td id="L52" class="blob-num js-line-number" data-line-number="52"></td>
        <td id="LC52" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-k">switch</span> (<span class="pl-vo">$algo</span>) {</span></td>
      </tr>
      <tr>
        <td id="L53" class="blob-num js-line-number" data-line-number="53"></td>
        <td id="LC53" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-k">case</span> <span class="pl-c1">PASSWORD_BCRYPT</span>:</span></td>
      </tr>
      <tr>
        <td id="L54" class="blob-num js-line-number" data-line-number="54"></td>
        <td id="LC54" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-vo">$cost</span> <span class="pl-k">=</span> <span class="pl-c1">PASSWORD_BCRYPT_DEFAULT_COST</span>;</span></td>
      </tr>
      <tr>
        <td id="L55" class="blob-num js-line-number" data-line-number="55"></td>
        <td id="LC55" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-k">if</span> (<span class="pl-s3">isset</span>(<span class="pl-vo">$options</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>cost<span class="pl-pds">&#39;</span></span>])) {</span></td>
      </tr>
      <tr>
        <td id="L56" class="blob-num js-line-number" data-line-number="56"></td>
        <td id="LC56" class="blob-code js-file-line"><span class="pl-s2">                        <span class="pl-vo">$cost</span> <span class="pl-k">=</span> <span class="pl-vo">$options</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>cost<span class="pl-pds">&#39;</span></span>];</span></td>
      </tr>
      <tr>
        <td id="L57" class="blob-num js-line-number" data-line-number="57"></td>
        <td id="LC57" class="blob-code js-file-line"><span class="pl-s2">                        <span class="pl-k">if</span> (<span class="pl-vo">$cost</span> <span class="pl-k">&lt;</span> <span class="pl-c1">4</span> <span class="pl-k">||</span> <span class="pl-vo">$cost</span> <span class="pl-k">&gt;</span> <span class="pl-c1">31</span>) {</span></td>
      </tr>
      <tr>
        <td id="L58" class="blob-num js-line-number" data-line-number="58"></td>
        <td id="LC58" class="blob-code js-file-line"><span class="pl-s2">                            <span class="pl-s3">trigger_error</span>(<span class="pl-s3">sprintf</span>(<span class="pl-s1"><span class="pl-pds">&quot;</span>password_hash(): Invalid bcrypt cost parameter specified: %d<span class="pl-pds">&quot;</span></span>, <span class="pl-vo">$cost</span>), <span class="pl-sc">E_USER_WARNING</span>);</span></td>
      </tr>
      <tr>
        <td id="L59" class="blob-num js-line-number" data-line-number="59"></td>
        <td id="LC59" class="blob-code js-file-line"><span class="pl-s2">                            <span class="pl-k">return</span> <span class="pl-c1">null</span>;</span></td>
      </tr>
      <tr>
        <td id="L60" class="blob-num js-line-number" data-line-number="60"></td>
        <td id="LC60" class="blob-code js-file-line"><span class="pl-s2">                        }</span></td>
      </tr>
      <tr>
        <td id="L61" class="blob-num js-line-number" data-line-number="61"></td>
        <td id="LC61" class="blob-code js-file-line"><span class="pl-s2">                    }</span></td>
      </tr>
      <tr>
        <td id="L62" class="blob-num js-line-number" data-line-number="62"></td>
        <td id="LC62" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-c">// The length of salt to generate</span></span></td>
      </tr>
      <tr>
        <td id="L63" class="blob-num js-line-number" data-line-number="63"></td>
        <td id="LC63" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-vo">$raw_salt_len</span> <span class="pl-k">=</span> <span class="pl-c1">16</span>;</span></td>
      </tr>
      <tr>
        <td id="L64" class="blob-num js-line-number" data-line-number="64"></td>
        <td id="LC64" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-c">// The length required in the final serialization</span></span></td>
      </tr>
      <tr>
        <td id="L65" class="blob-num js-line-number" data-line-number="65"></td>
        <td id="LC65" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-vo">$required_salt_len</span> <span class="pl-k">=</span> <span class="pl-c1">22</span>;</span></td>
      </tr>
      <tr>
        <td id="L66" class="blob-num js-line-number" data-line-number="66"></td>
        <td id="LC66" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-vo">$hash_format</span> <span class="pl-k">=</span> <span class="pl-s3">sprintf</span>(<span class="pl-s1"><span class="pl-pds">&quot;</span>$2y$%02d$<span class="pl-pds">&quot;</span></span>, <span class="pl-vo">$cost</span>);</span></td>
      </tr>
      <tr>
        <td id="L67" class="blob-num js-line-number" data-line-number="67"></td>
        <td id="LC67" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-c">// The expected length of the final crypt() output</span></span></td>
      </tr>
      <tr>
        <td id="L68" class="blob-num js-line-number" data-line-number="68"></td>
        <td id="LC68" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-vo">$resultLength</span> <span class="pl-k">=</span> <span class="pl-c1">60</span>;</span></td>
      </tr>
      <tr>
        <td id="L69" class="blob-num js-line-number" data-line-number="69"></td>
        <td id="LC69" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L70" class="blob-num js-line-number" data-line-number="70"></td>
        <td id="LC70" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-k">default</span>:</span></td>
      </tr>
      <tr>
        <td id="L71" class="blob-num js-line-number" data-line-number="71"></td>
        <td id="LC71" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-s3">trigger_error</span>(<span class="pl-s3">sprintf</span>(<span class="pl-s1"><span class="pl-pds">&quot;</span>password_hash(): Unknown password hashing algorithm: %s<span class="pl-pds">&quot;</span></span>, <span class="pl-vo">$algo</span>), <span class="pl-sc">E_USER_WARNING</span>);</span></td>
      </tr>
      <tr>
        <td id="L72" class="blob-num js-line-number" data-line-number="72"></td>
        <td id="LC72" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-k">return</span> <span class="pl-c1">null</span>;</span></td>
      </tr>
      <tr>
        <td id="L73" class="blob-num js-line-number" data-line-number="73"></td>
        <td id="LC73" class="blob-code js-file-line"><span class="pl-s2">            }</span></td>
      </tr>
      <tr>
        <td id="L74" class="blob-num js-line-number" data-line-number="74"></td>
        <td id="LC74" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-vo">$salt_req_encoding</span> <span class="pl-k">=</span> <span class="pl-c1">false</span>;</span></td>
      </tr>
      <tr>
        <td id="L75" class="blob-num js-line-number" data-line-number="75"></td>
        <td id="LC75" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-k">if</span> (<span class="pl-s3">isset</span>(<span class="pl-vo">$options</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>salt<span class="pl-pds">&#39;</span></span>])) {</span></td>
      </tr>
      <tr>
        <td id="L76" class="blob-num js-line-number" data-line-number="76"></td>
        <td id="LC76" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-k">switch</span> (<span class="pl-s3">gettype</span>(<span class="pl-vo">$options</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>salt<span class="pl-pds">&#39;</span></span>])) {</span></td>
      </tr>
      <tr>
        <td id="L77" class="blob-num js-line-number" data-line-number="77"></td>
        <td id="LC77" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-k">case</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>NULL<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L78" class="blob-num js-line-number" data-line-number="78"></td>
        <td id="LC78" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-k">case</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>boolean<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L79" class="blob-num js-line-number" data-line-number="79"></td>
        <td id="LC79" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-k">case</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>integer<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L80" class="blob-num js-line-number" data-line-number="80"></td>
        <td id="LC80" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-k">case</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>double<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L81" class="blob-num js-line-number" data-line-number="81"></td>
        <td id="LC81" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-k">case</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>string<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L82" class="blob-num js-line-number" data-line-number="82"></td>
        <td id="LC82" class="blob-code js-file-line"><span class="pl-s2">                        <span class="pl-vo">$salt</span> <span class="pl-k">=</span> (<span class="pl-st">string</span>) <span class="pl-vo">$options</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>salt<span class="pl-pds">&#39;</span></span>];</span></td>
      </tr>
      <tr>
        <td id="L83" class="blob-num js-line-number" data-line-number="83"></td>
        <td id="LC83" class="blob-code js-file-line"><span class="pl-s2">                        <span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L84" class="blob-num js-line-number" data-line-number="84"></td>
        <td id="LC84" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-k">case</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>object<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L85" class="blob-num js-line-number" data-line-number="85"></td>
        <td id="LC85" class="blob-code js-file-line"><span class="pl-s2">                        <span class="pl-k">if</span> (<span class="pl-s3">method_exists</span>(<span class="pl-vo">$options</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>salt<span class="pl-pds">&#39;</span></span>], <span class="pl-s1"><span class="pl-pds">&#39;</span>__tostring<span class="pl-pds">&#39;</span></span>)) {</span></td>
      </tr>
      <tr>
        <td id="L86" class="blob-num js-line-number" data-line-number="86"></td>
        <td id="LC86" class="blob-code js-file-line"><span class="pl-s2">                            <span class="pl-vo">$salt</span> <span class="pl-k">=</span> (<span class="pl-st">string</span>) <span class="pl-vo">$options</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>salt<span class="pl-pds">&#39;</span></span>];</span></td>
      </tr>
      <tr>
        <td id="L87" class="blob-num js-line-number" data-line-number="87"></td>
        <td id="LC87" class="blob-code js-file-line"><span class="pl-s2">                            <span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L88" class="blob-num js-line-number" data-line-number="88"></td>
        <td id="LC88" class="blob-code js-file-line"><span class="pl-s2">                        }</span></td>
      </tr>
      <tr>
        <td id="L89" class="blob-num js-line-number" data-line-number="89"></td>
        <td id="LC89" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-k">case</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>array<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L90" class="blob-num js-line-number" data-line-number="90"></td>
        <td id="LC90" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-k">case</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>resource<span class="pl-pds">&#39;</span></span>:</span></td>
      </tr>
      <tr>
        <td id="L91" class="blob-num js-line-number" data-line-number="91"></td>
        <td id="LC91" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-k">default</span>:</span></td>
      </tr>
      <tr>
        <td id="L92" class="blob-num js-line-number" data-line-number="92"></td>
        <td id="LC92" class="blob-code js-file-line"><span class="pl-s2">                        <span class="pl-s3">trigger_error</span>(<span class="pl-s1"><span class="pl-pds">&#39;</span>password_hash(): Non-string salt parameter supplied<span class="pl-pds">&#39;</span></span>, <span class="pl-sc">E_USER_WARNING</span>);</span></td>
      </tr>
      <tr>
        <td id="L93" class="blob-num js-line-number" data-line-number="93"></td>
        <td id="LC93" class="blob-code js-file-line"><span class="pl-s2">                        <span class="pl-k">return</span> <span class="pl-c1">null</span>;</span></td>
      </tr>
      <tr>
        <td id="L94" class="blob-num js-line-number" data-line-number="94"></td>
        <td id="LC94" class="blob-code js-file-line"><span class="pl-s2">                }</span></td>
      </tr>
      <tr>
        <td id="L95" class="blob-num js-line-number" data-line-number="95"></td>
        <td id="LC95" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-k">if</span> (<span class="pl-s3">PasswordCompat\binary\</span>_strlen(<span class="pl-vo">$salt</span>) <span class="pl-k">&lt;</span> <span class="pl-vo">$required_salt_len</span>) {</span></td>
      </tr>
      <tr>
        <td id="L96" class="blob-num js-line-number" data-line-number="96"></td>
        <td id="LC96" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-s3">trigger_error</span>(<span class="pl-s3">sprintf</span>(<span class="pl-s1"><span class="pl-pds">&quot;</span>password_hash(): Provided salt is too short: %d expecting %d<span class="pl-pds">&quot;</span></span>, <span class="pl-s3">PasswordCompat\binary\</span>_strlen(<span class="pl-vo">$salt</span>), <span class="pl-vo">$required_salt_len</span>), <span class="pl-sc">E_USER_WARNING</span>);</span></td>
      </tr>
      <tr>
        <td id="L97" class="blob-num js-line-number" data-line-number="97"></td>
        <td id="LC97" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-k">return</span> <span class="pl-c1">null</span>;</span></td>
      </tr>
      <tr>
        <td id="L98" class="blob-num js-line-number" data-line-number="98"></td>
        <td id="LC98" class="blob-code js-file-line"><span class="pl-s2">                } <span class="pl-k">elseif</span> (<span class="pl-c1">0</span> <span class="pl-k">==</span> <span class="pl-s3">preg_match</span>(<span class="pl-s1"><span class="pl-pds">&#39;</span>#^[a-zA-Z0-9./]+$#D<span class="pl-pds">&#39;</span></span>, <span class="pl-vo">$salt</span>)) {</span></td>
      </tr>
      <tr>
        <td id="L99" class="blob-num js-line-number" data-line-number="99"></td>
        <td id="LC99" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-vo">$salt_req_encoding</span> <span class="pl-k">=</span> <span class="pl-c1">true</span>;</span></td>
      </tr>
      <tr>
        <td id="L100" class="blob-num js-line-number" data-line-number="100"></td>
        <td id="LC100" class="blob-code js-file-line"><span class="pl-s2">                }</span></td>
      </tr>
      <tr>
        <td id="L101" class="blob-num js-line-number" data-line-number="101"></td>
        <td id="LC101" class="blob-code js-file-line"><span class="pl-s2">            } <span class="pl-k">else</span> {</span></td>
      </tr>
      <tr>
        <td id="L102" class="blob-num js-line-number" data-line-number="102"></td>
        <td id="LC102" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-vo">$buffer</span> <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span><span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L103" class="blob-num js-line-number" data-line-number="103"></td>
        <td id="LC103" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-vo">$buffer_valid</span> <span class="pl-k">=</span> <span class="pl-c1">false</span>;</span></td>
      </tr>
      <tr>
        <td id="L104" class="blob-num js-line-number" data-line-number="104"></td>
        <td id="LC104" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-k">if</span> (<span class="pl-s3">function_exists</span>(<span class="pl-s1"><span class="pl-pds">&#39;</span>mcrypt_create_iv<span class="pl-pds">&#39;</span></span>) <span class="pl-k">&amp;&amp;</span> <span class="pl-k">!</span><span class="pl-s3">defined</span>(<span class="pl-s1"><span class="pl-pds">&#39;</span>PHALANGER<span class="pl-pds">&#39;</span></span>)) {</span></td>
      </tr>
      <tr>
        <td id="L105" class="blob-num js-line-number" data-line-number="105"></td>
        <td id="LC105" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-vo">$buffer</span> <span class="pl-k">=</span> <span class="pl-s3">mcrypt_create_iv</span>(<span class="pl-vo">$raw_salt_len</span>, <span class="pl-sc">MCRYPT_DEV_URANDOM</span>);</span></td>
      </tr>
      <tr>
        <td id="L106" class="blob-num js-line-number" data-line-number="106"></td>
        <td id="LC106" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-k">if</span> (<span class="pl-vo">$buffer</span>) {</span></td>
      </tr>
      <tr>
        <td id="L107" class="blob-num js-line-number" data-line-number="107"></td>
        <td id="LC107" class="blob-code js-file-line"><span class="pl-s2">                        <span class="pl-vo">$buffer_valid</span> <span class="pl-k">=</span> <span class="pl-c1">true</span>;</span></td>
      </tr>
      <tr>
        <td id="L108" class="blob-num js-line-number" data-line-number="108"></td>
        <td id="LC108" class="blob-code js-file-line"><span class="pl-s2">                    }</span></td>
      </tr>
      <tr>
        <td id="L109" class="blob-num js-line-number" data-line-number="109"></td>
        <td id="LC109" class="blob-code js-file-line"><span class="pl-s2">                }</span></td>
      </tr>
      <tr>
        <td id="L110" class="blob-num js-line-number" data-line-number="110"></td>
        <td id="LC110" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-k">if</span> (<span class="pl-k">!</span><span class="pl-vo">$buffer_valid</span> <span class="pl-k">&amp;&amp;</span> <span class="pl-s3">function_exists</span>(<span class="pl-s1"><span class="pl-pds">&#39;</span>openssl_random_pseudo_bytes<span class="pl-pds">&#39;</span></span>)) {</span></td>
      </tr>
      <tr>
        <td id="L111" class="blob-num js-line-number" data-line-number="111"></td>
        <td id="LC111" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-vo">$buffer</span> <span class="pl-k">=</span> <span class="pl-s3">openssl_random_pseudo_bytes</span>(<span class="pl-vo">$raw_salt_len</span>);</span></td>
      </tr>
      <tr>
        <td id="L112" class="blob-num js-line-number" data-line-number="112"></td>
        <td id="LC112" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-k">if</span> (<span class="pl-vo">$buffer</span>) {</span></td>
      </tr>
      <tr>
        <td id="L113" class="blob-num js-line-number" data-line-number="113"></td>
        <td id="LC113" class="blob-code js-file-line"><span class="pl-s2">                        <span class="pl-vo">$buffer_valid</span> <span class="pl-k">=</span> <span class="pl-c1">true</span>;</span></td>
      </tr>
      <tr>
        <td id="L114" class="blob-num js-line-number" data-line-number="114"></td>
        <td id="LC114" class="blob-code js-file-line"><span class="pl-s2">                    }</span></td>
      </tr>
      <tr>
        <td id="L115" class="blob-num js-line-number" data-line-number="115"></td>
        <td id="LC115" class="blob-code js-file-line"><span class="pl-s2">                }</span></td>
      </tr>
      <tr>
        <td id="L116" class="blob-num js-line-number" data-line-number="116"></td>
        <td id="LC116" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-k">if</span> (<span class="pl-k">!</span><span class="pl-vo">$buffer_valid</span> <span class="pl-k">&amp;&amp;</span> <span class="pl-k">@</span><span class="pl-s3">is_readable</span>(<span class="pl-s1"><span class="pl-pds">&#39;</span>/dev/urandom<span class="pl-pds">&#39;</span></span>)) {</span></td>
      </tr>
      <tr>
        <td id="L117" class="blob-num js-line-number" data-line-number="117"></td>
        <td id="LC117" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-vo">$file</span> <span class="pl-k">=</span> <span class="pl-s3">fopen</span>(<span class="pl-s1"><span class="pl-pds">&#39;</span>/dev/urandom<span class="pl-pds">&#39;</span></span>, <span class="pl-s1"><span class="pl-pds">&#39;</span>r<span class="pl-pds">&#39;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L118" class="blob-num js-line-number" data-line-number="118"></td>
        <td id="LC118" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-vo">$read</span> <span class="pl-k">=</span> <span class="pl-s3">PasswordCompat\binary\</span>_strlen(<span class="pl-vo">$buffer</span>);</span></td>
      </tr>
      <tr>
        <td id="L119" class="blob-num js-line-number" data-line-number="119"></td>
        <td id="LC119" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-k">while</span> (<span class="pl-vo">$read</span> <span class="pl-k">&lt;</span> <span class="pl-vo">$raw_salt_len</span>) {</span></td>
      </tr>
      <tr>
        <td id="L120" class="blob-num js-line-number" data-line-number="120"></td>
        <td id="LC120" class="blob-code js-file-line"><span class="pl-s2">                        <span class="pl-vo">$buffer</span> <span class="pl-k">.=</span> <span class="pl-s3">fread</span>(<span class="pl-vo">$file</span>, <span class="pl-vo">$raw_salt_len</span> <span class="pl-k">-</span> <span class="pl-vo">$read</span>);</span></td>
      </tr>
      <tr>
        <td id="L121" class="blob-num js-line-number" data-line-number="121"></td>
        <td id="LC121" class="blob-code js-file-line"><span class="pl-s2">                        <span class="pl-vo">$read</span> <span class="pl-k">=</span> <span class="pl-s3">PasswordCompat\binary\</span>_strlen(<span class="pl-vo">$buffer</span>);</span></td>
      </tr>
      <tr>
        <td id="L122" class="blob-num js-line-number" data-line-number="122"></td>
        <td id="LC122" class="blob-code js-file-line"><span class="pl-s2">                    }</span></td>
      </tr>
      <tr>
        <td id="L123" class="blob-num js-line-number" data-line-number="123"></td>
        <td id="LC123" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-s3">fclose</span>(<span class="pl-vo">$file</span>);</span></td>
      </tr>
      <tr>
        <td id="L124" class="blob-num js-line-number" data-line-number="124"></td>
        <td id="LC124" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-k">if</span> (<span class="pl-vo">$read</span> <span class="pl-k">&gt;=</span> <span class="pl-vo">$raw_salt_len</span>) {</span></td>
      </tr>
      <tr>
        <td id="L125" class="blob-num js-line-number" data-line-number="125"></td>
        <td id="LC125" class="blob-code js-file-line"><span class="pl-s2">                        <span class="pl-vo">$buffer_valid</span> <span class="pl-k">=</span> <span class="pl-c1">true</span>;</span></td>
      </tr>
      <tr>
        <td id="L126" class="blob-num js-line-number" data-line-number="126"></td>
        <td id="LC126" class="blob-code js-file-line"><span class="pl-s2">                    }</span></td>
      </tr>
      <tr>
        <td id="L127" class="blob-num js-line-number" data-line-number="127"></td>
        <td id="LC127" class="blob-code js-file-line"><span class="pl-s2">                }</span></td>
      </tr>
      <tr>
        <td id="L128" class="blob-num js-line-number" data-line-number="128"></td>
        <td id="LC128" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-k">if</span> (<span class="pl-k">!</span><span class="pl-vo">$buffer_valid</span> <span class="pl-k">||</span> <span class="pl-s3">PasswordCompat\binary\</span>_strlen(<span class="pl-vo">$buffer</span>) <span class="pl-k">&lt;</span> <span class="pl-vo">$raw_salt_len</span>) {</span></td>
      </tr>
      <tr>
        <td id="L129" class="blob-num js-line-number" data-line-number="129"></td>
        <td id="LC129" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-vo">$buffer_length</span> <span class="pl-k">=</span> <span class="pl-s3">PasswordCompat\binary\</span>_strlen(<span class="pl-vo">$buffer</span>);</span></td>
      </tr>
      <tr>
        <td id="L130" class="blob-num js-line-number" data-line-number="130"></td>
        <td id="LC130" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-k">for</span> (<span class="pl-vo">$i</span> <span class="pl-k">=</span> <span class="pl-c1">0</span>; <span class="pl-vo">$i</span> <span class="pl-k">&lt;</span> <span class="pl-vo">$raw_salt_len</span>; <span class="pl-vo">$i</span><span class="pl-k">++</span>) {</span></td>
      </tr>
      <tr>
        <td id="L131" class="blob-num js-line-number" data-line-number="131"></td>
        <td id="LC131" class="blob-code js-file-line"><span class="pl-s2">                        <span class="pl-k">if</span> (<span class="pl-vo">$i</span> <span class="pl-k">&lt;</span> <span class="pl-vo">$buffer_length</span>) {</span></td>
      </tr>
      <tr>
        <td id="L132" class="blob-num js-line-number" data-line-number="132"></td>
        <td id="LC132" class="blob-code js-file-line"><span class="pl-s2">                            <span class="pl-vo">$buffer</span>[<span class="pl-vo">$i</span>] <span class="pl-k">=</span> <span class="pl-vo">$buffer</span>[<span class="pl-vo">$i</span>] <span class="pl-k">^</span> <span class="pl-s3">chr</span>(<span class="pl-s3">mt_rand</span>(<span class="pl-c1">0</span>, <span class="pl-c1">255</span>));</span></td>
      </tr>
      <tr>
        <td id="L133" class="blob-num js-line-number" data-line-number="133"></td>
        <td id="LC133" class="blob-code js-file-line"><span class="pl-s2">                        } <span class="pl-k">else</span> {</span></td>
      </tr>
      <tr>
        <td id="L134" class="blob-num js-line-number" data-line-number="134"></td>
        <td id="LC134" class="blob-code js-file-line"><span class="pl-s2">                            <span class="pl-vo">$buffer</span> <span class="pl-k">.=</span> <span class="pl-s3">chr</span>(<span class="pl-s3">mt_rand</span>(<span class="pl-c1">0</span>, <span class="pl-c1">255</span>));</span></td>
      </tr>
      <tr>
        <td id="L135" class="blob-num js-line-number" data-line-number="135"></td>
        <td id="LC135" class="blob-code js-file-line"><span class="pl-s2">                        }</span></td>
      </tr>
      <tr>
        <td id="L136" class="blob-num js-line-number" data-line-number="136"></td>
        <td id="LC136" class="blob-code js-file-line"><span class="pl-s2">                    }</span></td>
      </tr>
      <tr>
        <td id="L137" class="blob-num js-line-number" data-line-number="137"></td>
        <td id="LC137" class="blob-code js-file-line"><span class="pl-s2">                }</span></td>
      </tr>
      <tr>
        <td id="L138" class="blob-num js-line-number" data-line-number="138"></td>
        <td id="LC138" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-vo">$salt</span> <span class="pl-k">=</span> <span class="pl-vo">$buffer</span>;</span></td>
      </tr>
      <tr>
        <td id="L139" class="blob-num js-line-number" data-line-number="139"></td>
        <td id="LC139" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-vo">$salt_req_encoding</span> <span class="pl-k">=</span> <span class="pl-c1">true</span>;</span></td>
      </tr>
      <tr>
        <td id="L140" class="blob-num js-line-number" data-line-number="140"></td>
        <td id="LC140" class="blob-code js-file-line"><span class="pl-s2">            }</span></td>
      </tr>
      <tr>
        <td id="L141" class="blob-num js-line-number" data-line-number="141"></td>
        <td id="LC141" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-k">if</span> (<span class="pl-vo">$salt_req_encoding</span>) {</span></td>
      </tr>
      <tr>
        <td id="L142" class="blob-num js-line-number" data-line-number="142"></td>
        <td id="LC142" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-c">// encode string with the Base64 variant used by crypt</span></span></td>
      </tr>
      <tr>
        <td id="L143" class="blob-num js-line-number" data-line-number="143"></td>
        <td id="LC143" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-vo">$base64_digits</span> <span class="pl-k">=</span></span></td>
      </tr>
      <tr>
        <td id="L144" class="blob-num js-line-number" data-line-number="144"></td>
        <td id="LC144" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-s1"><span class="pl-pds">&#39;</span>ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L145" class="blob-num js-line-number" data-line-number="145"></td>
        <td id="LC145" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-vo">$bcrypt64_digits</span> <span class="pl-k">=</span></span></td>
      </tr>
      <tr>
        <td id="L146" class="blob-num js-line-number" data-line-number="146"></td>
        <td id="LC146" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-s1"><span class="pl-pds">&#39;</span>./ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L147" class="blob-num js-line-number" data-line-number="147"></td>
        <td id="LC147" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L148" class="blob-num js-line-number" data-line-number="148"></td>
        <td id="LC148" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-vo">$base64_string</span> <span class="pl-k">=</span> <span class="pl-s3">base64_encode</span>(<span class="pl-vo">$salt</span>);</span></td>
      </tr>
      <tr>
        <td id="L149" class="blob-num js-line-number" data-line-number="149"></td>
        <td id="LC149" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-vo">$salt</span> <span class="pl-k">=</span> <span class="pl-s3">strtr</span>(<span class="pl-s3">rtrim</span>(<span class="pl-vo">$base64_string</span>, <span class="pl-s1"><span class="pl-pds">&#39;</span>=<span class="pl-pds">&#39;</span></span>), <span class="pl-vo">$base64_digits</span>, <span class="pl-vo">$bcrypt64_digits</span>);</span></td>
      </tr>
      <tr>
        <td id="L150" class="blob-num js-line-number" data-line-number="150"></td>
        <td id="LC150" class="blob-code js-file-line"><span class="pl-s2">            }</span></td>
      </tr>
      <tr>
        <td id="L151" class="blob-num js-line-number" data-line-number="151"></td>
        <td id="LC151" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-vo">$salt</span> <span class="pl-k">=</span> <span class="pl-s3">PasswordCompat\binary\</span>_substr(<span class="pl-vo">$salt</span>, <span class="pl-c1">0</span>, <span class="pl-vo">$required_salt_len</span>);</span></td>
      </tr>
      <tr>
        <td id="L152" class="blob-num js-line-number" data-line-number="152"></td>
        <td id="LC152" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L153" class="blob-num js-line-number" data-line-number="153"></td>
        <td id="LC153" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-vo">$hash</span> <span class="pl-k">=</span> <span class="pl-vo">$hash_format</span> <span class="pl-k">.</span> <span class="pl-vo">$salt</span>;</span></td>
      </tr>
      <tr>
        <td id="L154" class="blob-num js-line-number" data-line-number="154"></td>
        <td id="LC154" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L155" class="blob-num js-line-number" data-line-number="155"></td>
        <td id="LC155" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-vo">$ret</span> <span class="pl-k">=</span> <span class="pl-s3">crypt</span>(<span class="pl-vo">$password</span>, <span class="pl-vo">$hash</span>);</span></td>
      </tr>
      <tr>
        <td id="L156" class="blob-num js-line-number" data-line-number="156"></td>
        <td id="LC156" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L157" class="blob-num js-line-number" data-line-number="157"></td>
        <td id="LC157" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-k">if</span> (<span class="pl-k">!</span><span class="pl-s3">is_string</span>(<span class="pl-vo">$ret</span>) <span class="pl-k">||</span> <span class="pl-s3">PasswordCompat\binary\</span>_strlen(<span class="pl-vo">$ret</span>) <span class="pl-k">!</span><span class="pl-k">=</span> <span class="pl-vo">$resultLength</span>) {</span></td>
      </tr>
      <tr>
        <td id="L158" class="blob-num js-line-number" data-line-number="158"></td>
        <td id="LC158" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-k">return</span> <span class="pl-c1">false</span>;</span></td>
      </tr>
      <tr>
        <td id="L159" class="blob-num js-line-number" data-line-number="159"></td>
        <td id="LC159" class="blob-code js-file-line"><span class="pl-s2">            }</span></td>
      </tr>
      <tr>
        <td id="L160" class="blob-num js-line-number" data-line-number="160"></td>
        <td id="LC160" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L161" class="blob-num js-line-number" data-line-number="161"></td>
        <td id="LC161" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-k">return</span> <span class="pl-vo">$ret</span>;</span></td>
      </tr>
      <tr>
        <td id="L162" class="blob-num js-line-number" data-line-number="162"></td>
        <td id="LC162" class="blob-code js-file-line"><span class="pl-s2">        }</span></td>
      </tr>
      <tr>
        <td id="L163" class="blob-num js-line-number" data-line-number="163"></td>
        <td id="LC163" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L164" class="blob-num js-line-number" data-line-number="164"></td>
        <td id="LC164" class="blob-code js-file-line"><span class="pl-s2">        <span class="pl-c">/**</span></span></td>
      </tr>
      <tr>
        <td id="L165" class="blob-num js-line-number" data-line-number="165"></td>
        <td id="LC165" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * Get information about the password hash. Returns an array of the information</span></span></td>
      </tr>
      <tr>
        <td id="L166" class="blob-num js-line-number" data-line-number="166"></td>
        <td id="LC166" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * that was used to generate the password hash.</span></span></td>
      </tr>
      <tr>
        <td id="L167" class="blob-num js-line-number" data-line-number="167"></td>
        <td id="LC167" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         *</span></span></td>
      </tr>
      <tr>
        <td id="L168" class="blob-num js-line-number" data-line-number="168"></td>
        <td id="LC168" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * array(</span></span></td>
      </tr>
      <tr>
        <td id="L169" class="blob-num js-line-number" data-line-number="169"></td>
        <td id="LC169" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         *    &#39;algo&#39; =&gt; 1,</span></span></td>
      </tr>
      <tr>
        <td id="L170" class="blob-num js-line-number" data-line-number="170"></td>
        <td id="LC170" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         *    &#39;algoName&#39; =&gt; &#39;bcrypt&#39;,</span></span></td>
      </tr>
      <tr>
        <td id="L171" class="blob-num js-line-number" data-line-number="171"></td>
        <td id="LC171" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         *    &#39;options&#39; =&gt; array(</span></span></td>
      </tr>
      <tr>
        <td id="L172" class="blob-num js-line-number" data-line-number="172"></td>
        <td id="LC172" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         *        &#39;cost&#39; =&gt; PASSWORD_BCRYPT_DEFAULT_COST,</span></span></td>
      </tr>
      <tr>
        <td id="L173" class="blob-num js-line-number" data-line-number="173"></td>
        <td id="LC173" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         *    ),</span></span></td>
      </tr>
      <tr>
        <td id="L174" class="blob-num js-line-number" data-line-number="174"></td>
        <td id="LC174" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * )</span></span></td>
      </tr>
      <tr>
        <td id="L175" class="blob-num js-line-number" data-line-number="175"></td>
        <td id="LC175" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         *</span></span></td>
      </tr>
      <tr>
        <td id="L176" class="blob-num js-line-number" data-line-number="176"></td>
        <td id="LC176" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * <span class="pl-k">@param</span> string $hash The password hash to extract info from</span></span></td>
      </tr>
      <tr>
        <td id="L177" class="blob-num js-line-number" data-line-number="177"></td>
        <td id="LC177" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         *</span></span></td>
      </tr>
      <tr>
        <td id="L178" class="blob-num js-line-number" data-line-number="178"></td>
        <td id="LC178" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * <span class="pl-k">@return</span> array The array of information about the hash.</span></span></td>
      </tr>
      <tr>
        <td id="L179" class="blob-num js-line-number" data-line-number="179"></td>
        <td id="LC179" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         */</span></span></td>
      </tr>
      <tr>
        <td id="L180" class="blob-num js-line-number" data-line-number="180"></td>
        <td id="LC180" class="blob-code js-file-line"><span class="pl-s2">        <span class="pl-st">function</span> <span class="pl-en">password_get_info</span>(<span class="pl-vo">$hash</span>) {</span></td>
      </tr>
      <tr>
        <td id="L181" class="blob-num js-line-number" data-line-number="181"></td>
        <td id="LC181" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-vo">$return</span> <span class="pl-k">=</span> <span class="pl-s3">array</span>(</span></td>
      </tr>
      <tr>
        <td id="L182" class="blob-num js-line-number" data-line-number="182"></td>
        <td id="LC182" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-s1"><span class="pl-pds">&#39;</span>algo<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-c1">0</span>,</span></td>
      </tr>
      <tr>
        <td id="L183" class="blob-num js-line-number" data-line-number="183"></td>
        <td id="LC183" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-s1"><span class="pl-pds">&#39;</span>algoName<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>unknown<span class="pl-pds">&#39;</span></span>,</span></td>
      </tr>
      <tr>
        <td id="L184" class="blob-num js-line-number" data-line-number="184"></td>
        <td id="LC184" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-s1"><span class="pl-pds">&#39;</span>options<span class="pl-pds">&#39;</span></span> <span class="pl-k">=&gt;</span> <span class="pl-s3">array</span>(),</span></td>
      </tr>
      <tr>
        <td id="L185" class="blob-num js-line-number" data-line-number="185"></td>
        <td id="LC185" class="blob-code js-file-line"><span class="pl-s2">            );</span></td>
      </tr>
      <tr>
        <td id="L186" class="blob-num js-line-number" data-line-number="186"></td>
        <td id="LC186" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-k">if</span> (<span class="pl-s3">PasswordCompat\binary\</span>_substr(<span class="pl-vo">$hash</span>, <span class="pl-c1">0</span>, <span class="pl-c1">4</span>) <span class="pl-k">==</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>$2y$<span class="pl-pds">&#39;</span></span> <span class="pl-k">&amp;&amp;</span> <span class="pl-s3">PasswordCompat\binary\</span>_strlen(<span class="pl-vo">$hash</span>) <span class="pl-k">==</span> <span class="pl-c1">60</span>) {</span></td>
      </tr>
      <tr>
        <td id="L187" class="blob-num js-line-number" data-line-number="187"></td>
        <td id="LC187" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-vo">$return</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>algo<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-c1">PASSWORD_BCRYPT</span>;</span></td>
      </tr>
      <tr>
        <td id="L188" class="blob-num js-line-number" data-line-number="188"></td>
        <td id="LC188" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-vo">$return</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>algoName<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>bcrypt<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L189" class="blob-num js-line-number" data-line-number="189"></td>
        <td id="LC189" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-s3">list</span>(<span class="pl-vo">$cost</span>) <span class="pl-k">=</span> <span class="pl-s3">sscanf</span>(<span class="pl-vo">$hash</span>, <span class="pl-s1"><span class="pl-pds">&quot;</span>$2y$%d$<span class="pl-pds">&quot;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L190" class="blob-num js-line-number" data-line-number="190"></td>
        <td id="LC190" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-vo">$return</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>options<span class="pl-pds">&#39;</span></span>][<span class="pl-s1"><span class="pl-pds">&#39;</span>cost<span class="pl-pds">&#39;</span></span>] <span class="pl-k">=</span> <span class="pl-vo">$cost</span>;</span></td>
      </tr>
      <tr>
        <td id="L191" class="blob-num js-line-number" data-line-number="191"></td>
        <td id="LC191" class="blob-code js-file-line"><span class="pl-s2">            }</span></td>
      </tr>
      <tr>
        <td id="L192" class="blob-num js-line-number" data-line-number="192"></td>
        <td id="LC192" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-k">return</span> <span class="pl-vo">$return</span>;</span></td>
      </tr>
      <tr>
        <td id="L193" class="blob-num js-line-number" data-line-number="193"></td>
        <td id="LC193" class="blob-code js-file-line"><span class="pl-s2">        }</span></td>
      </tr>
      <tr>
        <td id="L194" class="blob-num js-line-number" data-line-number="194"></td>
        <td id="LC194" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L195" class="blob-num js-line-number" data-line-number="195"></td>
        <td id="LC195" class="blob-code js-file-line"><span class="pl-s2">        <span class="pl-c">/**</span></span></td>
      </tr>
      <tr>
        <td id="L196" class="blob-num js-line-number" data-line-number="196"></td>
        <td id="LC196" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * Determine if the password hash needs to be rehashed according to the options provided</span></span></td>
      </tr>
      <tr>
        <td id="L197" class="blob-num js-line-number" data-line-number="197"></td>
        <td id="LC197" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         *</span></span></td>
      </tr>
      <tr>
        <td id="L198" class="blob-num js-line-number" data-line-number="198"></td>
        <td id="LC198" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * If the answer is true, after validating the password using password_verify, rehash it.</span></span></td>
      </tr>
      <tr>
        <td id="L199" class="blob-num js-line-number" data-line-number="199"></td>
        <td id="LC199" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         *</span></span></td>
      </tr>
      <tr>
        <td id="L200" class="blob-num js-line-number" data-line-number="200"></td>
        <td id="LC200" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * <span class="pl-k">@param</span> string $hash    The hash to test</span></span></td>
      </tr>
      <tr>
        <td id="L201" class="blob-num js-line-number" data-line-number="201"></td>
        <td id="LC201" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * <span class="pl-k">@param</span> int    $algo    The algorithm used for new password hashes</span></span></td>
      </tr>
      <tr>
        <td id="L202" class="blob-num js-line-number" data-line-number="202"></td>
        <td id="LC202" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * <span class="pl-k">@param</span> array  $options The options array passed to password_hash</span></span></td>
      </tr>
      <tr>
        <td id="L203" class="blob-num js-line-number" data-line-number="203"></td>
        <td id="LC203" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         *</span></span></td>
      </tr>
      <tr>
        <td id="L204" class="blob-num js-line-number" data-line-number="204"></td>
        <td id="LC204" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * <span class="pl-k">@return</span> boolean True if the password needs to be rehashed.</span></span></td>
      </tr>
      <tr>
        <td id="L205" class="blob-num js-line-number" data-line-number="205"></td>
        <td id="LC205" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         */</span></span></td>
      </tr>
      <tr>
        <td id="L206" class="blob-num js-line-number" data-line-number="206"></td>
        <td id="LC206" class="blob-code js-file-line"><span class="pl-s2">        <span class="pl-st">function</span> <span class="pl-en">password_needs_rehash</span>(<span class="pl-vo">$hash</span>, <span class="pl-vo">$algo</span>, <span class="pl-st">array</span> <span class="pl-vo">$options</span> <span class="pl-k">=</span> <span class="pl-s3">array</span>()) {</span></td>
      </tr>
      <tr>
        <td id="L207" class="blob-num js-line-number" data-line-number="207"></td>
        <td id="LC207" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-vo">$info</span> <span class="pl-k">=</span> <span class="pl-s3">password_get_info</span>(<span class="pl-vo">$hash</span>);</span></td>
      </tr>
      <tr>
        <td id="L208" class="blob-num js-line-number" data-line-number="208"></td>
        <td id="LC208" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-k">if</span> (<span class="pl-vo">$info</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>algo<span class="pl-pds">&#39;</span></span>] <span class="pl-k">!</span><span class="pl-k">=</span> <span class="pl-vo">$algo</span>) {</span></td>
      </tr>
      <tr>
        <td id="L209" class="blob-num js-line-number" data-line-number="209"></td>
        <td id="LC209" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-k">return</span> <span class="pl-c1">true</span>;</span></td>
      </tr>
      <tr>
        <td id="L210" class="blob-num js-line-number" data-line-number="210"></td>
        <td id="LC210" class="blob-code js-file-line"><span class="pl-s2">            }</span></td>
      </tr>
      <tr>
        <td id="L211" class="blob-num js-line-number" data-line-number="211"></td>
        <td id="LC211" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-k">switch</span> (<span class="pl-vo">$algo</span>) {</span></td>
      </tr>
      <tr>
        <td id="L212" class="blob-num js-line-number" data-line-number="212"></td>
        <td id="LC212" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-k">case</span> <span class="pl-c1">PASSWORD_BCRYPT</span>:</span></td>
      </tr>
      <tr>
        <td id="L213" class="blob-num js-line-number" data-line-number="213"></td>
        <td id="LC213" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-vo">$cost</span> <span class="pl-k">=</span> <span class="pl-s3">isset</span>(<span class="pl-vo">$options</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>cost<span class="pl-pds">&#39;</span></span>]) ? <span class="pl-vo">$options</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>cost<span class="pl-pds">&#39;</span></span>] : <span class="pl-c1">PASSWORD_BCRYPT_DEFAULT_COST</span>;</span></td>
      </tr>
      <tr>
        <td id="L214" class="blob-num js-line-number" data-line-number="214"></td>
        <td id="LC214" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-k">if</span> (<span class="pl-vo">$cost</span> <span class="pl-k">!</span><span class="pl-k">=</span> <span class="pl-vo">$info</span>[<span class="pl-s1"><span class="pl-pds">&#39;</span>options<span class="pl-pds">&#39;</span></span>][<span class="pl-s1"><span class="pl-pds">&#39;</span>cost<span class="pl-pds">&#39;</span></span>]) {</span></td>
      </tr>
      <tr>
        <td id="L215" class="blob-num js-line-number" data-line-number="215"></td>
        <td id="LC215" class="blob-code js-file-line"><span class="pl-s2">                        <span class="pl-k">return</span> <span class="pl-c1">true</span>;</span></td>
      </tr>
      <tr>
        <td id="L216" class="blob-num js-line-number" data-line-number="216"></td>
        <td id="LC216" class="blob-code js-file-line"><span class="pl-s2">                    }</span></td>
      </tr>
      <tr>
        <td id="L217" class="blob-num js-line-number" data-line-number="217"></td>
        <td id="LC217" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-k">break</span>;</span></td>
      </tr>
      <tr>
        <td id="L218" class="blob-num js-line-number" data-line-number="218"></td>
        <td id="LC218" class="blob-code js-file-line"><span class="pl-s2">            }</span></td>
      </tr>
      <tr>
        <td id="L219" class="blob-num js-line-number" data-line-number="219"></td>
        <td id="LC219" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-k">return</span> <span class="pl-c1">false</span>;</span></td>
      </tr>
      <tr>
        <td id="L220" class="blob-num js-line-number" data-line-number="220"></td>
        <td id="LC220" class="blob-code js-file-line"><span class="pl-s2">        }</span></td>
      </tr>
      <tr>
        <td id="L221" class="blob-num js-line-number" data-line-number="221"></td>
        <td id="LC221" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L222" class="blob-num js-line-number" data-line-number="222"></td>
        <td id="LC222" class="blob-code js-file-line"><span class="pl-s2">        <span class="pl-c">/**</span></span></td>
      </tr>
      <tr>
        <td id="L223" class="blob-num js-line-number" data-line-number="223"></td>
        <td id="LC223" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * Verify a password against a hash using a timing attack resistant approach</span></span></td>
      </tr>
      <tr>
        <td id="L224" class="blob-num js-line-number" data-line-number="224"></td>
        <td id="LC224" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         *</span></span></td>
      </tr>
      <tr>
        <td id="L225" class="blob-num js-line-number" data-line-number="225"></td>
        <td id="LC225" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * <span class="pl-k">@param</span> string $password The password to verify</span></span></td>
      </tr>
      <tr>
        <td id="L226" class="blob-num js-line-number" data-line-number="226"></td>
        <td id="LC226" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * <span class="pl-k">@param</span> string $hash     The hash to verify against</span></span></td>
      </tr>
      <tr>
        <td id="L227" class="blob-num js-line-number" data-line-number="227"></td>
        <td id="LC227" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         *</span></span></td>
      </tr>
      <tr>
        <td id="L228" class="blob-num js-line-number" data-line-number="228"></td>
        <td id="LC228" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * <span class="pl-k">@return</span> boolean If the password matches the hash</span></span></td>
      </tr>
      <tr>
        <td id="L229" class="blob-num js-line-number" data-line-number="229"></td>
        <td id="LC229" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         */</span></span></td>
      </tr>
      <tr>
        <td id="L230" class="blob-num js-line-number" data-line-number="230"></td>
        <td id="LC230" class="blob-code js-file-line"><span class="pl-s2">        <span class="pl-st">function</span> <span class="pl-en">password_verify</span>(<span class="pl-vo">$password</span>, <span class="pl-vo">$hash</span>) {</span></td>
      </tr>
      <tr>
        <td id="L231" class="blob-num js-line-number" data-line-number="231"></td>
        <td id="LC231" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-k">if</span> (<span class="pl-k">!</span><span class="pl-s3">function_exists</span>(<span class="pl-s1"><span class="pl-pds">&#39;</span>crypt<span class="pl-pds">&#39;</span></span>)) {</span></td>
      </tr>
      <tr>
        <td id="L232" class="blob-num js-line-number" data-line-number="232"></td>
        <td id="LC232" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-s3">trigger_error</span>(<span class="pl-s1"><span class="pl-pds">&quot;</span>Crypt must be loaded for password_verify to function<span class="pl-pds">&quot;</span></span>, <span class="pl-sc">E_USER_WARNING</span>);</span></td>
      </tr>
      <tr>
        <td id="L233" class="blob-num js-line-number" data-line-number="233"></td>
        <td id="LC233" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-k">return</span> <span class="pl-c1">false</span>;</span></td>
      </tr>
      <tr>
        <td id="L234" class="blob-num js-line-number" data-line-number="234"></td>
        <td id="LC234" class="blob-code js-file-line"><span class="pl-s2">            }</span></td>
      </tr>
      <tr>
        <td id="L235" class="blob-num js-line-number" data-line-number="235"></td>
        <td id="LC235" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-vo">$ret</span> <span class="pl-k">=</span> <span class="pl-s3">crypt</span>(<span class="pl-vo">$password</span>, <span class="pl-vo">$hash</span>);</span></td>
      </tr>
      <tr>
        <td id="L236" class="blob-num js-line-number" data-line-number="236"></td>
        <td id="LC236" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-k">if</span> (<span class="pl-k">!</span><span class="pl-s3">is_string</span>(<span class="pl-vo">$ret</span>) <span class="pl-k">||</span> <span class="pl-s3">PasswordCompat\binary\</span>_strlen(<span class="pl-vo">$ret</span>) <span class="pl-k">!</span><span class="pl-k">=</span> <span class="pl-s3">PasswordCompat\binary\</span>_strlen(<span class="pl-vo">$hash</span>) <span class="pl-k">||</span> <span class="pl-s3">PasswordCompat\binary\</span>_strlen(<span class="pl-vo">$ret</span>) <span class="pl-k">&lt;=</span> <span class="pl-c1">13</span>) {</span></td>
      </tr>
      <tr>
        <td id="L237" class="blob-num js-line-number" data-line-number="237"></td>
        <td id="LC237" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-k">return</span> <span class="pl-c1">false</span>;</span></td>
      </tr>
      <tr>
        <td id="L238" class="blob-num js-line-number" data-line-number="238"></td>
        <td id="LC238" class="blob-code js-file-line"><span class="pl-s2">            }</span></td>
      </tr>
      <tr>
        <td id="L239" class="blob-num js-line-number" data-line-number="239"></td>
        <td id="LC239" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L240" class="blob-num js-line-number" data-line-number="240"></td>
        <td id="LC240" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-vo">$status</span> <span class="pl-k">=</span> <span class="pl-c1">0</span>;</span></td>
      </tr>
      <tr>
        <td id="L241" class="blob-num js-line-number" data-line-number="241"></td>
        <td id="LC241" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-k">for</span> (<span class="pl-vo">$i</span> <span class="pl-k">=</span> <span class="pl-c1">0</span>; <span class="pl-vo">$i</span> <span class="pl-k">&lt;</span> <span class="pl-s3">PasswordCompat\binary\</span>_strlen(<span class="pl-vo">$ret</span>); <span class="pl-vo">$i</span><span class="pl-k">++</span>) {</span></td>
      </tr>
      <tr>
        <td id="L242" class="blob-num js-line-number" data-line-number="242"></td>
        <td id="LC242" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-vo">$status</span> <span class="pl-k">|</span><span class="pl-k">=</span> (<span class="pl-s3">ord</span>(<span class="pl-vo">$ret</span>[<span class="pl-vo">$i</span>]) <span class="pl-k">^</span> <span class="pl-s3">ord</span>(<span class="pl-vo">$hash</span>[<span class="pl-vo">$i</span>]));</span></td>
      </tr>
      <tr>
        <td id="L243" class="blob-num js-line-number" data-line-number="243"></td>
        <td id="LC243" class="blob-code js-file-line"><span class="pl-s2">            }</span></td>
      </tr>
      <tr>
        <td id="L244" class="blob-num js-line-number" data-line-number="244"></td>
        <td id="LC244" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L245" class="blob-num js-line-number" data-line-number="245"></td>
        <td id="LC245" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-k">return</span> <span class="pl-vo">$status</span> <span class="pl-k">===</span> <span class="pl-c1">0</span>;</span></td>
      </tr>
      <tr>
        <td id="L246" class="blob-num js-line-number" data-line-number="246"></td>
        <td id="LC246" class="blob-code js-file-line"><span class="pl-s2">        }</span></td>
      </tr>
      <tr>
        <td id="L247" class="blob-num js-line-number" data-line-number="247"></td>
        <td id="LC247" class="blob-code js-file-line"><span class="pl-s2">    }</span></td>
      </tr>
      <tr>
        <td id="L248" class="blob-num js-line-number" data-line-number="248"></td>
        <td id="LC248" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L249" class="blob-num js-line-number" data-line-number="249"></td>
        <td id="LC249" class="blob-code js-file-line"><span class="pl-s2">}</span></td>
      </tr>
      <tr>
        <td id="L250" class="blob-num js-line-number" data-line-number="250"></td>
        <td id="LC250" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L251" class="blob-num js-line-number" data-line-number="251"></td>
        <td id="LC251" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-k">namespace</span> <span class="pl-en">PasswordCompat\binary</span> {</span></td>
      </tr>
      <tr>
        <td id="L252" class="blob-num js-line-number" data-line-number="252"></td>
        <td id="LC252" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L253" class="blob-num js-line-number" data-line-number="253"></td>
        <td id="LC253" class="blob-code js-file-line"><span class="pl-s2">    <span class="pl-k">if</span> (<span class="pl-k">!</span><span class="pl-s3">function_exists</span>(<span class="pl-s1"><span class="pl-pds">&#39;</span>PasswordCompat<span class="pl-cce">\\</span>binary<span class="pl-cce">\\</span>_strlen<span class="pl-pds">&#39;</span></span>)) {</span></td>
      </tr>
      <tr>
        <td id="L254" class="blob-num js-line-number" data-line-number="254"></td>
        <td id="LC254" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L255" class="blob-num js-line-number" data-line-number="255"></td>
        <td id="LC255" class="blob-code js-file-line"><span class="pl-s2">        <span class="pl-c">/**</span></span></td>
      </tr>
      <tr>
        <td id="L256" class="blob-num js-line-number" data-line-number="256"></td>
        <td id="LC256" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * Count the number of bytes in a string</span></span></td>
      </tr>
      <tr>
        <td id="L257" class="blob-num js-line-number" data-line-number="257"></td>
        <td id="LC257" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         *</span></span></td>
      </tr>
      <tr>
        <td id="L258" class="blob-num js-line-number" data-line-number="258"></td>
        <td id="LC258" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * We cannot simply use strlen() for this, because it might be overwritten by the mbstring extension.</span></span></td>
      </tr>
      <tr>
        <td id="L259" class="blob-num js-line-number" data-line-number="259"></td>
        <td id="LC259" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * In this case, strlen() will count the number of *characters* based on the internal encoding. A</span></span></td>
      </tr>
      <tr>
        <td id="L260" class="blob-num js-line-number" data-line-number="260"></td>
        <td id="LC260" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * sequence of bytes might be regarded as a single multibyte character.</span></span></td>
      </tr>
      <tr>
        <td id="L261" class="blob-num js-line-number" data-line-number="261"></td>
        <td id="LC261" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         *</span></span></td>
      </tr>
      <tr>
        <td id="L262" class="blob-num js-line-number" data-line-number="262"></td>
        <td id="LC262" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * <span class="pl-k">@param</span> string $binary_string The input string</span></span></td>
      </tr>
      <tr>
        <td id="L263" class="blob-num js-line-number" data-line-number="263"></td>
        <td id="LC263" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         *</span></span></td>
      </tr>
      <tr>
        <td id="L264" class="blob-num js-line-number" data-line-number="264"></td>
        <td id="LC264" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * <span class="pl-k">@internal</span></span></span></td>
      </tr>
      <tr>
        <td id="L265" class="blob-num js-line-number" data-line-number="265"></td>
        <td id="LC265" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * <span class="pl-k">@return</span> int The number of bytes</span></span></td>
      </tr>
      <tr>
        <td id="L266" class="blob-num js-line-number" data-line-number="266"></td>
        <td id="LC266" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         */</span></span></td>
      </tr>
      <tr>
        <td id="L267" class="blob-num js-line-number" data-line-number="267"></td>
        <td id="LC267" class="blob-code js-file-line"><span class="pl-s2">        <span class="pl-st">function</span> <span class="pl-en">_strlen</span>(<span class="pl-vo">$binary_string</span>) {</span></td>
      </tr>
      <tr>
        <td id="L268" class="blob-num js-line-number" data-line-number="268"></td>
        <td id="LC268" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-k">if</span> (<span class="pl-s3">function_exists</span>(<span class="pl-s1"><span class="pl-pds">&#39;</span>mb_strlen<span class="pl-pds">&#39;</span></span>)) {</span></td>
      </tr>
      <tr>
        <td id="L269" class="blob-num js-line-number" data-line-number="269"></td>
        <td id="LC269" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-k">return</span> <span class="pl-s3">mb_strlen</span>(<span class="pl-vo">$binary_string</span>, <span class="pl-s1"><span class="pl-pds">&#39;</span>8bit<span class="pl-pds">&#39;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L270" class="blob-num js-line-number" data-line-number="270"></td>
        <td id="LC270" class="blob-code js-file-line"><span class="pl-s2">            }</span></td>
      </tr>
      <tr>
        <td id="L271" class="blob-num js-line-number" data-line-number="271"></td>
        <td id="LC271" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-k">return</span> <span class="pl-s3">strlen</span>(<span class="pl-vo">$binary_string</span>);</span></td>
      </tr>
      <tr>
        <td id="L272" class="blob-num js-line-number" data-line-number="272"></td>
        <td id="LC272" class="blob-code js-file-line"><span class="pl-s2">        }</span></td>
      </tr>
      <tr>
        <td id="L273" class="blob-num js-line-number" data-line-number="273"></td>
        <td id="LC273" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L274" class="blob-num js-line-number" data-line-number="274"></td>
        <td id="LC274" class="blob-code js-file-line"><span class="pl-s2">        <span class="pl-c">/**</span></span></td>
      </tr>
      <tr>
        <td id="L275" class="blob-num js-line-number" data-line-number="275"></td>
        <td id="LC275" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * Get a substring based on byte limits</span></span></td>
      </tr>
      <tr>
        <td id="L276" class="blob-num js-line-number" data-line-number="276"></td>
        <td id="LC276" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         *</span></span></td>
      </tr>
      <tr>
        <td id="L277" class="blob-num js-line-number" data-line-number="277"></td>
        <td id="LC277" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * <span class="pl-k">@see</span> _strlen()</span></span></td>
      </tr>
      <tr>
        <td id="L278" class="blob-num js-line-number" data-line-number="278"></td>
        <td id="LC278" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         *</span></span></td>
      </tr>
      <tr>
        <td id="L279" class="blob-num js-line-number" data-line-number="279"></td>
        <td id="LC279" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * <span class="pl-k">@param</span> string $binary_string The input string</span></span></td>
      </tr>
      <tr>
        <td id="L280" class="blob-num js-line-number" data-line-number="280"></td>
        <td id="LC280" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * <span class="pl-k">@param</span> int    $start</span></span></td>
      </tr>
      <tr>
        <td id="L281" class="blob-num js-line-number" data-line-number="281"></td>
        <td id="LC281" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * <span class="pl-k">@param</span> int    $length</span></span></td>
      </tr>
      <tr>
        <td id="L282" class="blob-num js-line-number" data-line-number="282"></td>
        <td id="LC282" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         *</span></span></td>
      </tr>
      <tr>
        <td id="L283" class="blob-num js-line-number" data-line-number="283"></td>
        <td id="LC283" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * <span class="pl-k">@internal</span></span></span></td>
      </tr>
      <tr>
        <td id="L284" class="blob-num js-line-number" data-line-number="284"></td>
        <td id="LC284" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * <span class="pl-k">@return</span> string The substring</span></span></td>
      </tr>
      <tr>
        <td id="L285" class="blob-num js-line-number" data-line-number="285"></td>
        <td id="LC285" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         */</span></span></td>
      </tr>
      <tr>
        <td id="L286" class="blob-num js-line-number" data-line-number="286"></td>
        <td id="LC286" class="blob-code js-file-line"><span class="pl-s2">        <span class="pl-st">function</span> <span class="pl-en">_substr</span>(<span class="pl-vo">$binary_string</span>, <span class="pl-vo">$start</span>, <span class="pl-vo">$length</span>) {</span></td>
      </tr>
      <tr>
        <td id="L287" class="blob-num js-line-number" data-line-number="287"></td>
        <td id="LC287" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-k">if</span> (<span class="pl-s3">function_exists</span>(<span class="pl-s1"><span class="pl-pds">&#39;</span>mb_substr<span class="pl-pds">&#39;</span></span>)) {</span></td>
      </tr>
      <tr>
        <td id="L288" class="blob-num js-line-number" data-line-number="288"></td>
        <td id="LC288" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-k">return</span> <span class="pl-s3">mb_substr</span>(<span class="pl-vo">$binary_string</span>, <span class="pl-vo">$start</span>, <span class="pl-vo">$length</span>, <span class="pl-s1"><span class="pl-pds">&#39;</span>8bit<span class="pl-pds">&#39;</span></span>);</span></td>
      </tr>
      <tr>
        <td id="L289" class="blob-num js-line-number" data-line-number="289"></td>
        <td id="LC289" class="blob-code js-file-line"><span class="pl-s2">            }</span></td>
      </tr>
      <tr>
        <td id="L290" class="blob-num js-line-number" data-line-number="290"></td>
        <td id="LC290" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-k">return</span> <span class="pl-s3">substr</span>(<span class="pl-vo">$binary_string</span>, <span class="pl-vo">$start</span>, <span class="pl-vo">$length</span>);</span></td>
      </tr>
      <tr>
        <td id="L291" class="blob-num js-line-number" data-line-number="291"></td>
        <td id="LC291" class="blob-code js-file-line"><span class="pl-s2">        }</span></td>
      </tr>
      <tr>
        <td id="L292" class="blob-num js-line-number" data-line-number="292"></td>
        <td id="LC292" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L293" class="blob-num js-line-number" data-line-number="293"></td>
        <td id="LC293" class="blob-code js-file-line"><span class="pl-s2">        <span class="pl-c">/**</span></span></td>
      </tr>
      <tr>
        <td id="L294" class="blob-num js-line-number" data-line-number="294"></td>
        <td id="LC294" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * Check if current PHP version is compatible with the library</span></span></td>
      </tr>
      <tr>
        <td id="L295" class="blob-num js-line-number" data-line-number="295"></td>
        <td id="LC295" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         *</span></span></td>
      </tr>
      <tr>
        <td id="L296" class="blob-num js-line-number" data-line-number="296"></td>
        <td id="LC296" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         * <span class="pl-k">@return</span> boolean the check result</span></span></td>
      </tr>
      <tr>
        <td id="L297" class="blob-num js-line-number" data-line-number="297"></td>
        <td id="LC297" class="blob-code js-file-line"><span class="pl-s2"><span class="pl-c">         */</span></span></td>
      </tr>
      <tr>
        <td id="L298" class="blob-num js-line-number" data-line-number="298"></td>
        <td id="LC298" class="blob-code js-file-line"><span class="pl-s2">        <span class="pl-st">function</span> <span class="pl-en">check</span>() {</span></td>
      </tr>
      <tr>
        <td id="L299" class="blob-num js-line-number" data-line-number="299"></td>
        <td id="LC299" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-s">static</span> <span class="pl-vo">$pass</span> <span class="pl-k">=</span> <span class="pl-c1">NULL</span>;</span></td>
      </tr>
      <tr>
        <td id="L300" class="blob-num js-line-number" data-line-number="300"></td>
        <td id="LC300" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L301" class="blob-num js-line-number" data-line-number="301"></td>
        <td id="LC301" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-k">if</span> (<span class="pl-s3">is_null</span>(<span class="pl-vo">$pass</span>)) {</span></td>
      </tr>
      <tr>
        <td id="L302" class="blob-num js-line-number" data-line-number="302"></td>
        <td id="LC302" class="blob-code js-file-line"><span class="pl-s2">                <span class="pl-k">if</span> (<span class="pl-s3">function_exists</span>(<span class="pl-s1"><span class="pl-pds">&#39;</span>crypt<span class="pl-pds">&#39;</span></span>)) {</span></td>
      </tr>
      <tr>
        <td id="L303" class="blob-num js-line-number" data-line-number="303"></td>
        <td id="LC303" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-vo">$hash</span> <span class="pl-k">=</span> <span class="pl-s1"><span class="pl-pds">&#39;</span>$2y$04$usesomesillystringfore7hnbRJHxXVLeakoG8K30oukPsA.ztMG<span class="pl-pds">&#39;</span></span>;</span></td>
      </tr>
      <tr>
        <td id="L304" class="blob-num js-line-number" data-line-number="304"></td>
        <td id="LC304" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-vo">$test</span> <span class="pl-k">=</span> <span class="pl-s3">crypt</span>(<span class="pl-s1"><span class="pl-pds">&quot;</span>password<span class="pl-pds">&quot;</span></span>, <span class="pl-vo">$hash</span>);</span></td>
      </tr>
      <tr>
        <td id="L305" class="blob-num js-line-number" data-line-number="305"></td>
        <td id="LC305" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-vo">$pass</span> <span class="pl-k">=</span> <span class="pl-vo">$test</span> <span class="pl-k">==</span> <span class="pl-vo">$hash</span>;</span></td>
      </tr>
      <tr>
        <td id="L306" class="blob-num js-line-number" data-line-number="306"></td>
        <td id="LC306" class="blob-code js-file-line"><span class="pl-s2">                } <span class="pl-k">else</span> {</span></td>
      </tr>
      <tr>
        <td id="L307" class="blob-num js-line-number" data-line-number="307"></td>
        <td id="LC307" class="blob-code js-file-line"><span class="pl-s2">                    <span class="pl-vo">$pass</span> <span class="pl-k">=</span> <span class="pl-c1">false</span>;</span></td>
      </tr>
      <tr>
        <td id="L308" class="blob-num js-line-number" data-line-number="308"></td>
        <td id="LC308" class="blob-code js-file-line"><span class="pl-s2">                }</span></td>
      </tr>
      <tr>
        <td id="L309" class="blob-num js-line-number" data-line-number="309"></td>
        <td id="LC309" class="blob-code js-file-line"><span class="pl-s2">            }</span></td>
      </tr>
      <tr>
        <td id="L310" class="blob-num js-line-number" data-line-number="310"></td>
        <td id="LC310" class="blob-code js-file-line"><span class="pl-s2">            <span class="pl-k">return</span> <span class="pl-vo">$pass</span>;</span></td>
      </tr>
      <tr>
        <td id="L311" class="blob-num js-line-number" data-line-number="311"></td>
        <td id="LC311" class="blob-code js-file-line"><span class="pl-s2">        }</span></td>
      </tr>
      <tr>
        <td id="L312" class="blob-num js-line-number" data-line-number="312"></td>
        <td id="LC312" class="blob-code js-file-line"><span class="pl-s2"></span></td>
      </tr>
      <tr>
        <td id="L313" class="blob-num js-line-number" data-line-number="313"></td>
        <td id="LC313" class="blob-code js-file-line"><span class="pl-s2">    }</span></td>
      </tr>
      <tr>
        <td id="L314" class="blob-num js-line-number" data-line-number="314"></td>
        <td id="LC314" class="blob-code js-file-line"><span class="pl-s2">}</span></td>
      </tr>
</table>

  </div>

  </div>
</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <form accept-charset="UTF-8" class="js-jump-to-line-form">
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" autofocus>
    <button type="submit" class="button">Go</button>
  </form>
</div>

        </div>

      </div><!-- /.repo-container -->
      <div class="modal-backdrop"></div>
    </div><!-- /.container -->
  </div><!-- /.site -->


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer" role="contentinfo">
    <ul class="site-footer-links right">
        <li><a href="https://status.github.com/" data-ga-click="Footer, go to status, text:status">Status</a></li>
      <li><a href="https://developer.github.com" data-ga-click="Footer, go to api, text:api">API</a></li>
      <li><a href="http://training.github.com" data-ga-click="Footer, go to training, text:training">Training</a></li>
      <li><a href="http://shop.github.com" data-ga-click="Footer, go to shop, text:shop">Shop</a></li>
        <li><a href="/blog" data-ga-click="Footer, go to blog, text:blog">Blog</a></li>
        <li><a href="/about" data-ga-click="Footer, go to about, text:about">About</a></li>

    </ul>

    <a href="/" aria-label="Homepage">
      <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
    </a>

    <ul class="site-footer-links">
      <li>&copy; 2015 <span title="0.03744s from github-fe137-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="/site/terms" data-ga-click="Footer, go to terms, text:terms">Terms</a></li>
        <li><a href="/site/privacy" data-ga-click="Footer, go to privacy, text:privacy">Privacy</a></li>
        <li><a href="/security" data-ga-click="Footer, go to security, text:security">Security</a></li>
        <li><a href="/contact" data-ga-click="Footer, go to contact, text:contact">Contact</a></li>
    </ul>
  </div>
</div>


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-suggester-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="fullscreen-contents js-fullscreen-contents" placeholder=""></textarea>
      <div class="suggester-container">
        <div class="suggester fullscreen-suggester js-suggester js-navigation-container"></div>
      </div>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped tooltipped-w" aria-label="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped tooltipped-w"
      aria-label="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    

    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-x flash-close js-ajax-error-dismiss" aria-label="Dismiss error"></a>
      Something went wrong with that request. Please try again.
    </div>


      <script crossorigin="anonymous" src="https://assets-cdn.github.com/assets/frameworks-996268c2962f947579cb9ec2908bd576591bc94b6a2db184a78e78815022ba2c.js"></script>
      <script async="async" crossorigin="anonymous" src="https://assets-cdn.github.com/assets/github-18c4a0d773e8d52e1108e0490079f42e5f63ee32f232bc49f24fd641b0ef0d9f.js"></script>
      
      

  </body>
</html>

