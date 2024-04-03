<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="./" class="app-brand-link">
      <span class="app-brand-logo demo">
        <img class="app-brand-logo demo app-brand-link" src="../../assets/img/prowess_logov2.png" alt="alternative">
      </span>
      <span class="app-brand-text demo menu-text fw-bold ms-2">PROWESS</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M11.4854 4.88844C11.0081 4.41121 10.2344 4.41121 9.75715 4.88844L4.51028 10.1353C4.03297 10.6126 4.03297 11.3865 4.51028 11.8638L9.75715 17.1107C10.2344 17.5879 11.0081 17.5879 11.4854 17.1107C11.9626 16.6334 11.9626 15.8597 11.4854 15.3824L7.96672 11.8638C7.48942 11.3865 7.48942 10.6126 7.96672 10.1353L11.4854 6.61667C11.9626 6.13943 11.9626 5.36568 11.4854 4.88844Z" fill="currentColor" fill-opacity="0.6" />
        <path d="M15.8683 4.88844L10.6214 10.1353C10.1441 10.6126 10.1441 11.3865 10.6214 11.8638L15.8683 17.1107C16.3455 17.5879 17.1192 17.5879 17.5965 17.1107C18.0737 16.6334 18.0737 15.8597 17.5965 15.3824L14.0778 11.8638C13.6005 11.3865 13.6005 10.6126 14.0778 10.1353L17.5965 6.61667C18.0737 6.13943 18.0737 5.36568 17.5965 4.88844C17.1192 4.41121 16.3455 4.41121 15.8683 4.88844Z" fill="currentColor" fill-opacity="0.38" />
      </svg>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboards -->
    <li class="menu-item active open">
      <a href="index" class="menu-link">
        <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
        <div data-i18n="Dashboards">Dashboards</div>
        <div class="badge bg-primary rounded-pill ms-auto"></div>
      </a>

    </li>

    <!-- Layouts -->

    <!-- Scholar -->
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons mdi mdi-school-outline"></i>
        <div data-i18n="Scholars">Scholars</div>
      </a>

      <ul class="menu-sub">
        <li class="menu-item">
          <a href="scholarInformation" class="menu-link">
            <div data-i18n="Scholars Information">Scholars Information</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="scholarPending" class="menu-link">
            <div data-i18n="Pending Scholar">Pending Scholar</div>
            <div class="badge bg-primary rounded-pill ms-auto"><?= countScholarAppLogPending2() ?></div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="New Scholars">New Scholars</div>
            <div class="badge bg-primary rounded-pill ms-auto"></div>
          </a>
        </li>
        <li class="menu-item">
          <a href="scholarFunding" class="menu-link">
            <div data-i18n="Funding">Funding</div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Institutions -->
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons mdi mdi-domain"></i>
        <div data-i18n="Institutions">Institutions</div>
      </a>

      <ul class="menu-sub">
        <li class="menu-item">
          <a href="hei_information" class="menu-link">
            <div data-i18n="HEI Information">HEI Information</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="industry_information" class="menu-link">
            <div data-i18n="Industry Information">Industry Information</div>
            <div class="badge bg-primary rounded-pill ms-auto"></div>
          </a>
        </li>
        <li class="menu-item">
          <a href="reports" class="menu-link">
            <div data-i18n="Reports">Reports</div>
            <div class="badge bg-primary rounded-pill ms-auto"></div>
          </a>
        </li>
      </ul>
    </li>

    <!-- Apps & Pages -->
    <li class="menu-header fw-light mt-4">
      <span class="menu-header-text">Other Menu</span>
    </li>
    <li class="menu-item">
      <a href="systemUsers" class="menu-link">
        <i class="menu-icon tf-icons mdi mdi-account-outline"></i>
        <div data-i18n="Users">System Users</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons mdi mdi-email-outline"></i>
        <div data-i18n="Messages">Messages</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="layouts-collapsed-menu.html" class="menu-link">
            <div data-i18n="Public Messages">Public Messages</div>
            <div class="badge bg-primary rounded-pill ms-auto"></div>
          </a>
        </li>
        <li class="menu-item">
          <a href="layouts-content-navbar.html" class="menu-link">
            <div data-i18n="Direct Messages">Direct Messages</div>
            <div class="badge bg-primary rounded-pill ms-auto">3</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="announcements" class="menu-link">
        <i class="menu-icon tf-icons mdi mdi-calendar-blank-outline"></i>
        <div data-i18n="Announcements & Events">Announcements & Events</div>
      </a>
    </li>
    <!-- MISC -->
    <li class="menu-header fw-light mt-4">
      <span class="menu-header-text">Misc</span>
    </li>
    <li class="menu-item">
      <a href="settings" class="menu-link">
        <i class="menu-icon tf-icons mdi mdi-cog-outline"></i>
        <div data-i18n="Settings">Settings</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="#" target="_blank" class="menu-link">
        <i class="menu-icon tf-icons mdi mdi-lifebuoy"></i>
        <div data-i18n="Support">Support</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="#" target="_blank" class="menu-link">
        <i class="menu-icon tf-icons mdi mdi-file-document-multiple-outline"></i>
        <div data-i18n="About">About</div>
      </a>
    </li>
  </ul>
</aside>