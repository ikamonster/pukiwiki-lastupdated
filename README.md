# PukiWiki用プラグイン<br>最終更新日時表示 lastupdated.inc.php

ウィキ全体の最終更新日時を表示する[PukiWiki](https://pukiwiki.osdn.jp/)用プラグイン。

|対象PukiWikiバージョン|対象PHPバージョン|
|:---:|:---:|
|PukiWiki 1.5.3 ~ 1.5.4RC (UTF-8)|PHP 7.4 ~ 8.1|

## インストール

下記GitHubページからダウンロードした lastupdated.inc.php を PukiWiki の plugin ディレクトリに配置してください。

[https://github.com/ikamonster/pukiwiki-lastupdated](https://github.com/ikamonster/pukiwiki-lastupdated)

## 使い方

```
&lastupdated();
```

## 設定

ソース内の下記の定数で動作を制御することができます。

|定数名|値|既定値|意味|
|:---|:---:|:---:|:---|
|PLUGIN_LASTUPDATED_PASSAGE|0 or 1|1|経過時間を併記する|
