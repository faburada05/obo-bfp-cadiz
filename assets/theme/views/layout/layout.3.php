  <!-- aside -->
  <div id="aside" class="app-aside modal fade folded md show-text nav-dropdown" ng-class="{'folded': app.setting.folded}">
    <div class="left navside black dk" layout="column">
      <div class="navbar no-radius">
        <div ui-include="'../pos/assets/theme/views/blocks/navbar.brand.html'"></div>
      </div>
      <div flex class="hide-scroll">
          <nav class="scroll nav-active-{{app.setting.theme.primary}}">
            <div ui-include="'../pos/assets/theme/views/blocks/nav.html'"></div>
          </nav>
      </div>
      <div flex-no-shrink>
        <div ui-include="'../pos/assets/theme/views/blocks/aside.top.1.html'"></div>
      </div>
    </div>
  </div>
  <!-- / aside -->
  
  <!-- content -->
  <div id="content" class="app-content box-shadow-z3" role="main">
    <div class="app-header white box-shadow">
        <div ui-include="'../pos/assets/theme/views/blocks/header.html'"></div>
    </div>
    <div class="app-footer">
      <div ui-include="'../pos/assets/theme/views/blocks/footer.html'"></div>
    </div>
    <div ui-view class="app-body" id="view"></div>
  </div>
  <!-- / -->

  <!-- theme switcher -->
  <div id="switcher">
    <div ui-include="'../pos/assets/theme/views/blocks/switcher.html'"></div>
  </div>
  <!-- / -->
