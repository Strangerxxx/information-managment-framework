<?php
	global $cimsApp;
	global $get_data;
	
	$cimsModel = new CIMS_model;
	$cimsModel->m_model_name = "content";
	$cimsModel->start();

	switch($get_data['act']) {
		case "view_categories":
			# Viewing categories
			break;
		default:
?>
			<div class="aui-block">
				<table cellpadding="10" width="100%">
					<tr style="background: #E0E0E0;">
						<td>
							<b>�������� ������</b>
						</td>
						<td>
							<b>���������</b>
						</td>
						<td>
							<b>������������</b>
						</td>
						<td>
							<b>����������</b>
						</td>
						<td>
							<b>�����</b>
						</td>
					</tr>
					<?php
						$content = getArticlesList(0);
						
						foreach($content as $string) {
							print $string;
						}
					?>
				</table>
			</div>
<?
			break;
	}
?>