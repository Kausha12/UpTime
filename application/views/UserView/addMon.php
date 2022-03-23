<div id="newMonitor" class="modal hide fade" tabindex="-1" data-width="60%">
                    <div class="modal-header"> </div>
                    <form id="newMonitorForm" class="form-horizontal" method="POST" action="<?php echo base_url('addMonitorController/addMonitor')?>" autocomplete="off">
                        <div class="modal-body">
                            <div class="tab-pane active fade in">
                                <div class="row-fluid">
                                    <div class="span7 grider">
                                        <div class="widget widget-simple">
                                            <div class="widget-header">
                                                <h4><i class="fontello-icon-edit"></i> New Monitor</h4>
                                            </div>
                                            <div class="widget-content">
                                                <div class="widget-body">
                                                    <div class="row-fluid">
                                                        <div class="span12 form-dark">
                                                            <fieldset>
                                                                <ul class="form-list label-left list-bordered dotted">
                                                                    <li class="section-form">
                                                                        <h4 class="test">Monitor Information</h4>
                                                                    </li>

                                                                    <li class="control-group">
                                                                        <input type="hidden" id="userMonitorLimit" value="5" />
                                                                        <label for="newMonitorType" class="control-label">Monitor Type</label>
                                                                        <div class="controls">
                                                                            <select id="newMonitorType" class="selecttwo span6" name="newMonitorType">
<option selected="selected" value="0">Please Select</option>
<option value="1">HTTP(s)</option>
<option value="2">Keyword</option>
<option value="3">Ping</option>
<option value="4">Port</option>
<!-- <option value="5" disabled="disabled" class="newMonitorType is-pro">Heartbeat</option> -->
</select>
                                                                        </div>
                                                                    </li>

                                                                    <div class="hide" id="newHTTPMonitor">
                                                                        <li class="control-group">
                                                                            <label for="newHTTPMonitorFriendlyName" class="control-label">Friendly Name</label>
                                                                            <div class="controls">
                                                                                <input id="newHTTPMonitorFriendlyName" class="span6" type="text" value="" name="newHTTPMonitorFriendlyName">
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="newHTTPMonitorURL" class="control-label">URL (or IP)</label>
                                                                            <div class="controls">
                                                                                <input id="newHTTPMonitorURL" class="span8" type="text" name="newHTTPMonitorURL" value="https://">
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="newHTTPMonitorInterval" class="control-label">Monitoring Interval</label>
                                                                            <div class="controls">
                                                                            <div class="noUiSlider span6 timeoutSlider"></div>
                                                                                <span class="help-inline span5">in <span class="timeoutInText"><b>30</b> seconds</span>
                                                                                <input type="text" name="newHTTPMonitorInterval" value="30" class="hide monitorTimeout">
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <label for="newHTTPMonitorTimeout" class="control-label">Monitor Timeout</label>
                                                                            <div class="controls">
                                                                                <div class="noUiSlider span6 timeoutSlider"></div>
                                                                                <span class="help-inline span5">in <span class="timeoutInText"><b>30</b> seconds</span>
                                                                                <input type="text" name="newHTTPMonitorTimeout" value="" class="hide monitorTimeout">
                                                                            </div>
                                                                        </li>
                                                                        <div id="newHTTPMonitorAdvancedSettingsIgnoreSSLErrors" style="margin-bottom: 15px;">
                                                                            <li class="control-group">
                                                                                <!-- <label for="newHTTPMonitorIgnoreSSLErrors" class="control-label">Monitor SSL errors</label> -->
                                                                                <div class="controls">
                                                                                    <!-- <input id="newHTTPMonitorIgnoreSSLErrors" class="leftFloat" type="checkbox" name="newHTTPMonitorIgnoreSSLErrors" value="1" disabled="disabled"> -->
                                                                                    <div style="margin-top: 5px; margin-left: 10px; float: left;">
                                                                                        <!-- <span class="label label-warning">PRO</span><br />
                                                                                        <span class="font-size: 11px">Available only in the PRO plan.</span> -->
                                                                                        <!-- <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal">Upgrade</a> -->
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <!-- <label for="newHTTPMonitorSSLCheckDisableStatus" class="control-label">Enable SSL expiry reminders</label> -->
                                                                                <div class="controls">
                                                                                    <!-- <input id="newHTTPMonitorSSLCheckDisableStatus" class="leftFloat" type="checkbox" name="newHTTPMonitorSSLCheckDisableStatus" value="1" disabled="disabled"> -->
                                                                                    <div style="margin-top: 5px; margin-left: 10px; float: left;">
                                                                                        <!-- <span class="label label-warning">PRO</span><br />
                                                                                        <span class="font-size: 11px">Available only in the PRO plan.</span>
                                                                                        <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal">Upgrade</a> -->
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <div class="sslHttpsWarning">Monitor URL needs to start with "https" for the SSL monitoring to work.</div>
                                                                        </div>
                                                                        <li class="section-form">
                                                                            <h4>Advanced Settings (Optional) <small><a href="#" data-toggle="collapse" data-target="#newHTTPMonitorAdvancedSettings">show/hide</a></small></h4>
                                                                        </li>
                                                                        <div class="collapse" id="newHTTPMonitorAdvancedSettings">
                                                                            <div class="accordion-group subSection">
                                                                                <li class="section-form">
                                                                                    <h4>Authentication Settings <small><a href="#" data-toggle="collapse" data-parent="#newHTTPMonitorAdvancedSettings" data-target="#newHTTPMonitorAdvancedSettingsAuthentication">show/hide</a></small></h4>
                                                                                </li>
                                                                                <div class="collapse" id="newHTTPMonitorAdvancedSettingsAuthentication">
                                                                                    <li class="control-group">
                                                                                        <label for="newHTTPMonitorHTTPUsername" class="control-label">Username <span class="required">*</span></label>
                                                                                        <div class="controls">
                                                                                            <input id="newHTTPMonitorHTTPUsername" class="span6" type="text" name="newHTTPMonitorHTTPUsername" value="" autocomplete="off">
                                                                                        </div>
                                                                                    </li>

                                                                                    <li class="control-group">
                                                                                        <label for="newHTTPMonitorHTTPPassword" class="control-label">Password</label>
                                                                                        <div class="controls">
                                                                                            <input id="newHTTPMonitorHTTPPassword" class="span6" type="text" name="newHTTPMonitorHTTPPassword" value="" autocomplete="new-password">
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="control-group">
                                                                                        <label for="newHTTPMonitorAuthType" class="control-label">Authentication Type</label>
                                                                                        <div class="controls">
                                                                                            <div data-toggle="buttons-radio" class="btn-group">
                                                                                                <button onclick="javascript:document.getElementById('newHTTPMonitorAuthType').value='1';" class="btn btn-green active" type="button" class-toggle="btn-green" value="1">HTTP Basic</button>
                                                                                                <button onclick="javascript:document.getElementById('newHTTPMonitorAuthType').value='2';" class="btn" type="button" class-toggle="btn-green" value="2">Digest</button>
                                                                                            </div>
                                                                                            <input type="hidden" id="newHTTPMonitorAuthType" value="1" name="newHTTPMonitorAuthType" />
                                                                                        </div>
                                                                                    </li>
                                                                                </div>
                                                                            </div>
                                                                            <div class="accordion-group subSection">
                                                                                <li class="section-form">
                                                                                    <h4>Custom Http Statuses <small><a href="#" data-toggle="collapse" data-parent="#newHTTPMonitorAdvancedSettings" data-target="#newHTTPMonitorAdvancedSettingsCustomHttpStatuses">show/hide</a></small></h4>
                                                                                </li>
                                                                                <div class="collapse" id="newHTTPMonitorAdvancedSettingsCustomHttpStatuses">
                                                                                    <div class="span12" style="position:absolute;top: 50%;left: 35%;">
                                                                                        <!-- <span class="proFeatureDisabledText">
<span class="label label-warning">PRO</span> Available only in the PRO plan. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal"
                                                                                            data-cta-source="new_monitor-adv_monitor_settings-http_statuses">Upgrade</a>
                                                                                        </span> -->
                                                                                    </div>
                                                                                    <div class="opaci15 blur disableTouch noSelect">
                                                                                        <div class="row-fluid">
                                                                                            <div class="statusCodesBlock upstatuses">
                                                                                                <li class="control-group">
                                                                                                    <label for="editHTTPStatusCodesUpValues" class="control-label">Up Status Codes: </label>
                                                                                                </li>
                                                                                                <li class="control-group upStatusesBlock"></li>
                                                                                            </div>
                                                                                            <div class="statusCodesBlock downstatuses">
                                                                                                <li class="control-group">
                                                                                                    <label for="editHTTPStatusCodesUpValues" class="control-label">Down Status Codes: </label>
                                                                                                </li>
                                                                                                <li class="control-group downStatusesBlock"></li>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row-fluid">
                                                                                            <button type="button" class="httpStatusCodesResetBtn btn btn-grey btn-mini pull-right" disabled>
Reset HTTP Statuses
</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="accordion-group subSection">
                                                                                <li class="section-form">
                                                                                    <h4>Custom Headers <small><a href="#" data-toggle="collapse" data-parent="#newHTTPMonitorAdvancedSettings" data-target="#newHTTPMonitorAdvancedSettingsCustomHeaders">show/hide</a></small></h4>
                                                                                </li>
                                                                                <div class="collapse" id="newHTTPMonitorAdvancedSettingsCustomHeaders">
                                                                                    <div class="span12" style="position:absolute;top: 50%;left: 35%;">
                                                                                        <!-- <span class="proFeatureDisabledText">
<span class="label label-warning">PRO</span> Available only in the PRO plan. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal"
                                                                                            data-cta-source="new_monitor-adv_monitor_settings-custom_headers">Upgrade</a>
                                                                                        </span> -->
                                                                                    </div>
                                                                                    <li class="control-group opaci15 blur">
                                                                                        <label for="newHTTPMonitorCustomHeaders" class="control-label">Custom Headers</label>
                                                                                        <div class="newHTTPMonitorCustomHeadersContainer monitorCustomHeadersContainer">
                                                                                        </div>
                                                                                        <div class="controls">
                                                                                            <button type="button" class="monitorCustomHeaderBtn newHTTPMonitorCustomHeadersBtn btn btn-primary btn-sm" data-generateclass="newHTTPMonitorCustomHeaders" disabled>
Add Custom Header</button>
                                                                                        </div>
                                                                                    </li>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="hide" id="newKeywordMonitor">
                                                                        <li class="control-group">
                                                                            <label for="newKeywordMonitorFriendlyName" class="control-label">Friendly Name</label>
                                                                            <div class="controls">
                                                                                <input id="newKeywordMonitorFriendlyName" class="span6" type="text" value="" name="newKeywordMonitorFriendlyName">
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="newKeywordMonitorURL" class="control-label">URL (or IP)</label>
                                                                            <div class="controls">
                                                                                <input id="newKeywordMonitorURL" class="span8" type="text" name="newKeywordMonitorURL" value="https://">
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="newKeywordMonitorKeywordValue" class="control-label">Keyword</label>
                                                                            <div class="controls">
                                                                                <input id="newKeywordMonitorKeywordValue" class="span6" type="text" value="" name="newKeywordMonitorKeywordValue">
                                                                                <span class="help-block">(the keyword must be present in the HTML source)</span>
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="newKeywordCaseType" class="control-label">Case-insensitive</label>
                                                                            <div class="controls">
                                                                                <input id="newKeywordCaseType" class="leftFloat" type="checkbox" name="newKeywordCaseType" value="1">
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <label for="newKeywordMonitorKeywordType" class="control-label">Alert When</label>
                                                                            <div class="controls">
                                                                                <div data-toggle="buttons-radio" class="btn-group">
                                                                                    <button onclick="javascript:document.getElementById('newKeywordMonitorKeywordType').value='1'" class="btn" type="button" class-toggle="btn-green" value="1">Keyword Exists</button>
                                                                                    <button onclick="javascript:document.getElementById('newKeywordMonitorKeywordType').value='2'" class="btn" type="button" class-toggle="btn-green" value="2">Keyword Not Exists</button>
                                                                                </div>
                                                                                <input type="hidden" id="newKeywordMonitorKeywordType" value="" name="newKeywordMonitorKeywordType" />
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="newKeywordMonitorInterval" class="control-label">Monitoring Interval</label>
                                                                            <div class="controls">
                                                                                <<div class=" iSlider span6 timeoutSlider"></div>
                                                                                <span class="help-inline span5">in <span class="timeoutInText"><b>30</b> seconds</span>
                                                                                <input type="text" name="newKeywordMonitorInterval" value="30" class="hide monitorTimeout">
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <label for="newKeywordMonitorTimeout" class="control-label">Monitor Timeout</label>
                                                                            <div class="controls">
                                                                                <div class="noUiSlider span6 timeoutSlider"></div>
                                                                                <span class="help-inline span5">in <span class="timeoutInText"><b>30</b> seconds</span>
                                                                                <input type="text" name="newKeywordMonitorTimeout" value="30" class="hide monitorTimeout">
                                                                            </div>
                                                                        </li>
                                                                        <div id="newKeywordMonitorAdvancedSettingsIgnoreSSLErrors">
                                                                            <li class="control-group">
                                                                                <!-- <label for="newKeywordMonitorIgnoreSSLErrors" class="control-label">Monitor SSL errors</label> -->
                                                                                <div class="controls">
                                                                                    <!-- <input id="newKeywordMonitorIgnoreSSLErrors" class="leftFloat" type="checkbox" name="newKeywordMonitorIgnoreSSLErrors" value="1" disabled="disabled"> -->
                                                                                    <div style="margin-top: 5px; margin-left: 10px; float: left;">
                                                                                        <!-- <span class="label label-warning">PRO</span><br />
                                                                                        <span class="font-size: 11px">Available only in the PRO plan.</span>
                                                                                        <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal">Upgrade</a> -->
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="control-group">
                                                                                <!-- <label for="newKeywordMonitorSSLCheckDisableStatus" class="control-label">Enable SSL expiry reminders</label> -->
                                                                                <div class="controls">
                                                                                    <!-- <input id="newKeywordMonitorSSLCheckDisableStatus" class="leftFloat" type="checkbox" name="newKeywordMonitorSSLCheckDisableStatus" value="1" disabled="disabled"> -->
                                                                                    <div style="margin-top: 5px; margin-left: 10px; float: left;">
                                                                                        <!-- <span class="label label-warning">PRO</span><br />
                                                                                        <span class="font-size: 11px">Available only in the PRO plan.</span>
                                                                                        <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal">Upgrade</a> -->
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <div class="sslHttpsWarning">Monitor URL needs to start with "https" for the SSL monitoring to work.</div>
                                                                        </div>
                                                                        <li class="section-form">
                                                                            <h4>Advanced Settings (Optional) <small><a href="#" data-toggle="collapse" data-target="#newKeywordMonitorAdvancedSettings">show/hide</a></small></h4>
                                                                        </li>
                                                                        <div class="collapse" id="newKeywordMonitorAdvancedSettings">
                                                                            <div class="accordion-group subSection">
                                                                                <li class="section-form">
                                                                                    <h4>Authentication Settings <small><a href="#" data-toggle="collapse" data-parent="#newKeywordMonitorAdvancedSettings" data-target="#newKeywordMonitorAdvancedSettingsAuthentication">show/hide</a></small></h4>
                                                                                </li>
                                                                                <div class="collapse" id="newKeywordMonitorAdvancedSettingsAuthentication">
                                                                                    <li class="control-group">
                                                                                        <label for="newKeywordMonitorHTTPUsername" class="control-label">Username <span class="required">*</span></label>
                                                                                        <div class="controls">
                                                                                            <input id="newKeywordMonitorHTTPUsername" class="span6" type="text" name="newKeywordMonitorHTTPUsername" value="" autocomplete="off">
                                                                                        </div>
                                                                                    </li>

                                                                                    <li class="control-group">
                                                                                        <label for="newKeywordMonitorHTTPPassword" class="control-label">Password</label>
                                                                                        <div class="controls">
                                                                                            <input id="newKeywordMonitorHTTPPassword" class="span6" type="text" name="newKeywordMonitorHTTPPassword" value="" autocomplete="new-password">
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="control-group">
                                                                                        <label for="newKeywordMonitorAuthType" class="control-label">Authentication Type</label>
                                                                                        <div class="controls">
                                                                                            <div data-toggle="buttons-radio" class="btn-group">
                                                                                                <button onclick="javascript:document.getElementById('newKeywordMonitorAuthType').value='1';" class="btn btn-green active" type="button" class-toggle="btn-green" value="1">HTTP Basic</button>
                                                                                                <button onclick="javascript:document.getElementById('newKeywordMonitorAuthType').value='2';" class="btn" type="button" class-toggle="btn-green" value="2">Digest</button>
                                                                                            </div>
                                                                                            <input type="hidden" id="newKeywordMonitorAuthType" value="1" name="newKeywordMonitorAuthType" />
                                                                                        </div>
                                                                                    </li>
                                                                                </div>
                                                                            </div>
                                                                            <div class="accordion-group subSection">
                                                                                <li class="section-form">
                                                                                    <h4>Custom Headers <small><a href="#" data-toggle="collapse" data-parent="#newKeywordMonitorAdvancedSettings" data-target="#newKeywordMonitorAdvancedSettingsCustomHeaders">show/hide</a></small></h4>
                                                                                </li>
                                                                                <div class="collapse" id="newKeywordMonitorAdvancedSettingsCustomHeaders">
                                                                                    <div class="span12" style="position:absolute;top: 50%;left: 35%;">
                                                                                        <span class="proFeatureDisabledText">
<span class="label label-warning">PRO</span> Available only in the PRO plan. <a href="#upgradeAccount" class="upgradeProAccount" data-dismiss="modal" data-toggle="modal"
                                                                                            data-cta-source="new_monitor-adv_monitor_settings-custom_headers">Upgrade</a>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="opaci15 blur">
                                                                                        <li class="control-group">
                                                                                            <label for="newKeywordMonitorCustomHeaders" class="control-label">Custom Headers</label>
                                                                                            <div class="newKeywordMonitorCustomHeadersContainer monitorCustomHeadersContainer">
                                                                                            </div>
                                                                                            <div class="controls">
                                                                                                <button type="button" class="monitorCustomHeaderBtn newKeywordMonitorCustomHeadersBtn btn btn-primary btn-sm" data-generateclass="newKeywordMonitorCustomHeaders">Add Custom Header</button>
                                                                                            </div>
                                                                                        </li>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="hide" id="newPingMonitor">
                                                                        <li class="control-group">
                                                                            <label for="newPingMonitorFriendlyName" class="control-label">Friendly Name</label>
                                                                            <div class="controls">
                                                                                <input id="newPingMonitorFriendlyName" class="span6" type="text" value="" name="newPingMonitorFriendlyName">
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="newPingMonitorURL" class="control-label">IP (or Host)</label>
                                                                            <div class="controls">
                                                                                <input id="newPingMonitorURL" class="span8" type="text" name="newPingMonitorURL" value="">
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <label for="newPingMonitorInterval" class="control-label">Monitoring Interval</label>
                                                                            <div class="controls">
                                                                            <div class="noUiSlider span6 timeoutSlider"></div>
                                                                                <span class="help-inline span5">in <span class="timeoutInText"><b>30</b> seconds</span>
                                                                                <input type="text" name="newPingMonitorTimeout" value="30" class="hide monitorTimeout">
                                                                            </div>
                                                                        </li>

                                                                    </div>
                                                                    <div class="hide" id="newPortMonitor">
                                                                        <li class="control-group">
                                                                            <label for="newPortMonitorFriendlyName" class="control-label">Friendly Name</label>
                                                                            <div class="controls">
                                                                                <input id="newPortMonitorFriendlyName" class="span6" type="text" value="" name="newPortMonitorFriendlyName">
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="newPortMonitorURL" class="control-label">IP (or URL or Host)</label>
                                                                            <div class="controls">
                                                                                <input id="newPortMonitorURL" class="span8" type="text" name="newPortMonitorURL" value="">
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="newPortMonitorPort" class="control-label">Port</label>
                                                                            <div class="controls">
                                                                                <select id="newPortMonitorPort" class="selecttwo span6" name="newPortMonitorPort" style="float:none;">
<option value="0" selected="selected">Please select</option>
<optgroup label="Popular Ports">
<option value="1">HTTP (80)</option>
<option value="2">HTTPS (443)</option>
<option value="3">FTP (21)</option>
<option value="4">SMTP (25)</option>
<option value="5">POP3 (110)</option>
<option value="6">IMAP (143)</option>
</optgroup>
<optgroup label="Custom Port">
<option value="99">Custom Port</option>
</optgroup>
</select>
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group hide" id="newPortMonitorCustomPortWrapper">
                                                                            <label for="newPortMonitorCustomPort" class="control-label">Custom Port</label>
                                                                            <div class="controls">
                                                                                <input id="newPortMonitorCustomPort" class="span6" type="text" value="" name="newPortMonitorCustomPort">
                                                                            </div>
                                                                        </li>

                                                                        <li class="control-group">
                                                                            <label for="newPortMonitorInterval" class="control-label">Monitoring Interval</label>
                                                                           <div class="controls">
                                                                           <div class="noUiSlider span6 timeoutSlider"></div>
                                                                                <span class="help-inline span5">in <span class="timeoutInText"><b>30</b> seconds</span>
                                                                                <input type="text" name="newPortMonitorTimeout" value="30" class="hide monitorTimeout">
                                                                            </div>
                                                                        </li>
                                                                        <li class="control-group">
                                                                            <label for="newPortMonitorTimeout" class="control-label">Monitor Timeout</label>
                                                                            <div class="controls">
                                                                                <div class="noUiSlider span6 timeoutSlider"></div>
                                                                                <span class="help-inline span5">in <span class="timeoutInText"><b>30</b> seconds</span>
                                                                                <input type="text" name="newPortMonitorTimeout" value="30" class="hide monitorTimeout">
                                                                            </div>
                                                                        </li>
                                                                    </div>
                                                                    
                                                                </ul>
                                                            </fieldset>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                       
                                        <div id="newMonitorSuccessNotification" class="alert alert-success no-margin-right no-margin-left margin-top20 hide">
                                            <strong class="alert-success">Monitor created!</strong> You can keep creating new monitors.
                                        </div>
                                        <div id="newMonitorSuccessNotificationTestInfo" class="alert alert-info no-margin-right no-margin-left margin-top20 hide" style="min-height: 30px;">
                                            Go ahead and test notification setup to see if everything works.
                                            <button type="button" class="btn btn-primary pull-right" id="show-monitor-detail">
Go to monitor detail
</button>
                                        </div>
                                        <div id="newMonitorErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide">
                                            <strong class="alert-error">The monitor already exists in the list</strong>.
                                        </div>
                                        <div id="newMonitorBlacklistErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide">
                                            <strong class="alert-error">The monitor URL/IP is in blacklist, please try with another URL/IP</strong>.
                                        </div>
                                        <div id="newMonitorInvalidUrlErrorNotification" class="alert alert-error no-margin-right no-margin-left margin-top20 hide">
                                            <strong class="alert-error">The monitor URL/IP is invalid, please try with another URL/IP</strong>.
                                        </div>
                                    </div>

                                    <div class="span5 grider">
<input type="hidden" name="alertContactsInputNew" class="alertContactsInputNew" value="">
 <input type="hidden" name="alertContactsSettingsStatus" class="alertContactsSettingsStatus" value="0">
    <div id="newMonitorAlertContacts" class="alertContactsContainerNew">
        <div class="widget widget-simple widget-notes widgetToGetEmail" data-alertcontactaccountemail="trivedikausha@gmail.com">
        <div class="widget-header">
            <h4><i class="fontello-icon-users-1"></i> Select "Alert Contacts To Notify"</h4>
        </div>
        <div id="maxAlertContactError">

        </div>
        <div class="widget-body">
            <h5>Selected: <span class="alertContactSelectedCount">0</span> of <span class="alertContactCount">1</span> 
            <span class="showHideAlertContactsInSettingsWrap"> (<a href="#no" class="showHideAlertContactsInNewEdit">hide</a>)</span>.</h5>
            <button class="searchAlertContactBtn" type="button"><i class="fontello-icon-search-5" style="margin-right:0;"></i></button>
            <input type="text" value="" placeholder="Search" class="span3 alertContactSearchKeyword"> 
            <div class="alertContactsTableShowHideNewEdit">
                <table class="table table-condensed">
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th>Type</th>
                            <th>Alert Contact</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="3" style="padding-top:0;padding-bottom:0;">
                            <div class="monitorAlertAdvancedOptionsInfo alert alert-info hide no-margin">
                                These are optional controls to define "when to get notified" and "if to get notified once or every x minutes".
                                <p><b>Info:</b> When a monitor is down, UptimeRobot checks them each minute (no matter their interval) and, for that reason, the minute values mentioned are also equal to the tries/checks made.</p>
                                <p>And, recurring notifications are auto-stopped once the downtime is over 1 day.</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="monitorAlertContactsNew[]" value="01668626" class="monitorAlertContactsNew monitorAlertContactsNew01668626 monitorAlertContactVariableNew" data-alertcontactid="01668626"></td>
                            <td><i class="fontello-icon-mail"></i></td>
                            <td><span title="trivedikausha@gmail.com">trivedikausha@gmail.<span class="shortenLongAlertContacts"></span>..</span></td>
                        </tr>
                        <tr class="monitorAlertContactsAdvancedOptionsNew01668626 hide">
                            <td colspan="3" style="border-top:0px;">if down for <select disabled="" class="monitorAlertThresholdNew monitorAlertThresholdNew01668626 monitorAlertContactVariableNew" name="monitorAlertThresholdNew[]" data-alertcontactid="01668626" style="font-size: 11px;height: 20px;width:80px; padding:1px;"><option value="0">
0 mins
</option>
<option value="1">
1 mins
</option>
<option value="2">
2 mins
</option>
<option value="3">
3 mins
</option>
<option value="4">
4 mins
</option>
<option value="5">
5 mins
</option>
<option value="6">
6 mins
</option>
<option value="7">
7 mins
</option>
<option value="8">
8 mins
</option>
<option value="9">
9 mins
</option>
<option value="10">
10 mins
</option>
<option value="11">
11 mins
</option>
<option value="12">
12 mins
</option>
<option value="13">
13 mins
</option>
<option value="14">
14 mins
</option>
<option value="15">
15 mins
</option>
<option value="20">
20 mins
</option>
<option value="25">
25 mins
</option>
<option value="30">
30 mins
</option>
<option value="35">
35 mins
</option>
<option value="40">
40 mins
</option>
<option value="45">
45 mins
</option>
<option value="50">
50 mins
</option>
<option value="55">
55 mins
</option>
<option value="60">
60 mins
</option>
<option value="70">
70 mins
</option>
<option value="80">
80 mins
</option>
<option value="90">
90 mins
</option>
<option value="100">
100 mins
</option>
<option value="110">
110 mins
</option>
<option value="120">
2 hrs
</option>
<option value="150">
2.5 hrs
</option>
<option value="180">
3 hrs
</option>
<option value="210">
3.5 hrs
</option>
<option value="240">
4 hrs
</option>
<option value="270">
4.5 hrs
</option>
<option value="300">
5 hrs
</option>
<option value="360">
6 hrs
</option>
<option value="420">
7 hrs
</option>
<option value="480">
8 hrs
</option>
 <option value="540">
9 hrs
</option>
<option value="600">
10 hrs
</option>
<option value="660">
11 hrs
</option>
<option value="720">
12 hrs
</option></select>, notify <select disabled="" class="monitorAlertRecurrenceNew monitorAlertRecurrenceNew01668626 monitorAlertContactVariableNew" name="monitorAlertRecurrenceNew[]" data-alertcontactid="01668626" style="font-size: 11px;height: 20px;width:110px; padding:1px;"><option value="0">
once
</option>
<option value="1">
every 1 min
</option>
<option value="2">
every 2 mins
</option>
<option value="3">
every 3 mins
</option>
<option value="4">
every 4 mins
</option>
<option value="5">
every 5 mins
</option>
<option value="6">
every 6 mins
</option>
<option value="7">
every 7 mins
</option>
<option value="8">
every 8 mins
</option>
<option value="9">
every 9 mins
</option>
<option value="10">
every 10 mins
</option>
<option value="11">
every 11 mins
</option>
<option value="12">
every 12 mins
</option>
<option value="13">
every 13 mins
</option>
<option value="14">
every 14 mins
</option>
<option value="15">
every 15 mins
</option>
<option value="20">
every 20 mins
</option>
<option value="25">
every 25 mins
</option>
<option value="30">
every 30 mins
</option>
<option value="35">
every 35 mins
</option>
<option value="40">
every 40 mins
</option>
<option value="45">
every 45 mins
</option>
<option value="50">
every 50 mins
</option>
<option value="55">
every 55 mins
</option>
<option value="60">
every 60 mins
</option></select></td></tr><tr><td colspan="3">New alert contacts can be defined from the "<a href="#mySettings" class="mySettings text-color underline">My Settings</a>" page.</td></tr></tbody></table></div></div></div><input type="hidden" value="4" class="alertContactsLimitNew">
</div>
<input type="hidden" class="getAlertContactsEditOrListDetector" value="0">
<input type="hidden" name="mWindowsInputNew" class="mWindowsInputNew" value="">
<input type="hidden" class="getMWindowsEditOrListDetector" value="0">
</div>


                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn">Close</button>
                            <button type="submit" class="btn btn-primary"><a href="<?php echo base_url('addMonitorController/addMonitor')?>" > Create Monitor</a> </button>
                        </div>
                    </form>
                </div>
               