<?php
/*
PukiWiki - Yet another WikiWikiWeb clone.
lastupdated.inc.php, v1.00 2020 M.Taniguchi
License: GPL v3 or (at your option) any later version

ウィキ全体の最終更新日時を表示するプラグイン。

具体的には、cache/recent.dat のタイムスタンプを出力します。
厳密には違いがありますが、recentプラグインの最新1件のページ更新（またはページ削除）時刻が出ると考えてください。

【使い方】
&lastupdated();

【使用例】
このウィキの最終更新日時は &lastupdated(); です。
*/

/////////////////////////////////////////////////
// 最終更新日時表示プラグイン設定（lastupdated.inc.php）
if (!defined('PLUGIN_LASTUPDATED_PASSAGE')) define('PLUGIN_LASTUPDATED_PASSAGE', 1); // 0：経過時間非表示、1：経過時間を併記


function plugin_lastupdated_inline() {
	static	$time = null;

	if ($time === null) {
		$fname = CACHE_DIR . 'recent.dat';
		$time = file_exists($fname) ? filemtime($fname) - ZONETIME : 0;
		$time = ($time)? '<time class="plugin-lastupdated" datetime="' . date('Y-m-d\TH:i:s\Z', $time) . '">' . format_date($time) . (PLUGIN_LASTUPDATED_PASSAGE ? ' ' . get_passage($time) : '') . '</time>' : '';
	}

	return $time;
}


