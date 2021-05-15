{*+**********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
************************************************************************************}

{if $MENU_STRUCTURE}
{assign var="topMenus" value=$MENU_STRUCTURE->getTop()}
{assign var="moreMenus" value=$MENU_STRUCTURE->getMore()}

<div id="modules-menu" class="modules-menu">
	{foreach key=moduleName item=moduleModel from=$SELECTED_CATEGORY_MENU_LIST}
		{assign var='translatedModuleLabel' value=vtranslate($moduleModel->get('label'),$moduleName )}
		<ul title="{$translatedModuleLabel}" class="module-qtip">
			<li {if $MODULE eq $moduleName}class="active"{else}class=""{/if}>
			    {if $moduleName == 'Accounts' }
								    	<a href="index.php?module=Accounts&view=List&app=MARKETING" title="Clients">
								    	{$moduleModel->getModuleIcon()}
                            			<span>Client</span>
			{else if $moduleName == 'Users' }
								    	<a href="index.php?module=Users&parent=Settings&view=List&block=1&fieldid=1" title="Employee Management">
								    	{$moduleModel->getModuleIcon()}
                            			<span>{$translatedModuleLabel}</span>
			{else}
				<a href="{$moduleModel->getDefaultUrl()}&app={$SELECTED_MENU_CATEGORY}">
					{$moduleModel->getModuleIcon()}
					<span>{$translatedModuleLabel}</span>
					{/if}
				</a>
			</li>
		</ul>
	{/foreach}
</div>
{/if}
