<?php

// -*-mode: PHP; coding:utf-8;-*-
// $Id: block_mrbs.php,v 1.1 2009/02/26 07:20:12 arborrow Exp $
// This file contains PHP code that specifies language specific strings
// The default strings come from lang.en, and anything in a locale
// specific file will overwrite the default. This is a Japanese file.
//
//
//
//
// This file is PHP code. Treat it as such.
// The charset to use in "Content-type" header
$string["charset"] = "UTF-8";

// Used for Moodle
$string['blockname'] = 'Booking system';
$string['accessmrbs'] = 'Schedule a Resource';

// Used in style.inc
$string["mrbs"] = "会議室予約システム";

// Used in functions.inc
$string["report"] = "報告";
$string["admin"] = "管�?�";
$string["help"] = "ヘルプ";
$string["search"] = "検索";
$string["not_php3"] = "警告: 本ソフトウェア�?��?PHP3�?��?��?��??ら�??動作�?��?��?�ん。";

// Used in day.php
$string["bookingsfor"] = "";
$string["bookingsforpost"] = "�?�予約�?��?�";
$string["areas"] = "部署";
$string["daybefore"] = "�?�?�日�?�移動";
$string["dayafter"] = "次�?�日移動";
$string["gototoday"] = "本日�?�移動";
$string["goto"] = "移動";
$string["highlight_line"] = "�?��?�行を強調";
$string["click_to_reserve"] = "予約を入れ�?��?�セルをクリック�?��?��??�?��?��?�。";

// Used in trailer.inc
$string["viewday"] = "日�?�表示";
$string["viewweek"] = "週�?�表示";
$string["viewmonth"] = "月�?�表示";
$string["ppreview"] = "�?�刷プレビュー";

// Used in edit_entry.php
$string["addentry"] = "予約を追加";
$string["editentry"] = "予約を編集";
$string["copyentry"] = "予約をコピー";
$string["editseries"] = "定例予約を編集";
$string["copyseries"] = "定例予約をコピー";
$string["namebooker"] = "概�?";
$string["fulldescription"] = "詳細�?�説明<br>(人数,<br>内部会議/外部会議 等)";
$string["date"] = "日付";
$string["start_date"] = "開始時刻";
$string["end_date"] = "終了時刻";
$string["time"] = "時間";
$string["period"] = "期間";
$string["duration"] = "所�?時間";
$string["seconds"] = "秒";
$string["minutes"] = "分";
$string["hours"] = "時間";
$string["days"] = "日";
$string["weeks"] = "週";
$string["years"] = "年";
$string["periods"] = "期間";
$string["all_day"] = "終日";
$string["type"] = "種別";
$string["internal"] = "内部会議";
$string["external"] = "外部会議";
$string["save"] = "�?存";
$string["rep_type"] = "繰り返�?��?�様�?";
$string["rep_type_0"] = "�?��?�";
$string["rep_type_1"] = "毎日";
$string["rep_type_2"] = "毎週";
$string["rep_type_3"] = "毎月";
$string["rep_type_4"] = "毎年";
$string["rep_type_5"] = "毎月�?��?�日";
$string["rep_type_6"] = "n週毎";
$string["rep_end_date"] = "繰り返�?��?�終了日";
$string["rep_rep_day"] = "繰り返�?��?�曜日";
$string["rep_for_weekly"] = "((毎週/n週毎 �?�択時)";
$string["rep_freq"] = "頻度";
$string["rep_num_weeks"] = "繰り返�?�周期";
$string["rep_for_nweekly"] = "(n週毎 �?�択時)";
$string["ctrl_click"] = "複数�?�部屋を�?�択�?�る�?��??�?��?<br>Controlキーを押�?��?��?�らクリック�?��?��??�?��?��?�。";
$string["entryid"] = "予約ID ";
$string["repeat_id"] = "定例予約ID ";
$string["you_have_not_entered"] = "以下�?�項目�?�入力�?�れ�?��?��?��?�ん:";
$string["you_have_not_selected"] = "以下�?�項目�?��?�択�?�れ�?��?��?��?�ん:";
$string["valid_room"] = "部屋";
$string["valid_time_of_day"] = "valid time of day.";
$string["brief_description"] = "簡�?��?�説明";
$string["useful_n-weekly_value"] = "useful n-weekly value.";

// Used in view_entry.php
$string["description"] = "説明";
$string["room"] = "部屋";
$string["createdby"] = "予約者";
$string["lastupdate"] = "最終更新";
$string["deleteentry"] = "予約を削除";
$string["deleteseries"] = "定例予約を削除";
$string["confirmdel"] = "�?��?�エントリを削除�?��?�もよ�?�?��?��?��?��?�?";
$string["returnprev"] = "�?�?�ページ�?�戻る";
$string["invalid_entry_id"] = "�?正�?�予約ID�?��?�。";
$string["invalid_series_id"] = "�?正�?�定例予約ID�?��?�。";

// Used in edit_entry_handler.php
$string["error"] = "エラー";
$string["sched_conflict"] = "予定�?��?複";
$string["conflict"] = "新�?��?�予約�?��?以下�?�登録�?��?複�?��?��?��?��?�:";
$string["too_may_entrys"] = "�?�択�?�れ�?�オプション�?�大�?�?�エントリーを作�?�?��?��?�。<br>別�?�オプションを使用�?��?�下�?��?�!";
$string["returncal"] = "カレンダー表示�?�戻る";
$string["failed_to_acquire"] = "データベース�?��?�排他的�?�アクセス�?�確�?�?�失敗�?��?��?��?�";
$string["invalid_booking"] = "�?正�?�予約";
$string["must_set_description"] = "予約�?��?��?�?�簡�?��?�説明を設定�?�る必�?�?��?�り�?��?�。戻�?��?�入力�?��?��??�?��?��?�。";
$string["mail_subject_entry"] = "$mrbs_company MRBSエントリ�?�追加/変更";
$string["mail_body_new_entry"] = "新�?エントリ�?�予約�?�れ�?��?��?�。詳細�?�以下�?��?��?�り�?��?�:";
$string["mail_body_del_entry"] = "エントリ�?�削除�?�れ�?��?��?�。詳細�?�以下�?��?��?�り�?��?�:";
$string["mail_body_changed_entry"] = "エントリ�?�変更�?�れ�?��?��?�。詳細�?�以下�?��?��?�り�?��?�:";
$string["mail_subject_delete"] = "$mrbs_company MRBSエントリ�?�削除";

// Authentication stuff
$string["accessdenied"] = "アクセス�?�拒�?��?�れ�?��?��?�";
$string["norights"] = "�?��?�項目を変更�?�るアクセス権�?��?�り�?��?�ん。";
$string["please_login"] = "ログイン�?��?��??�?��?��?�";
$string["user_name"] = "�??�?";
$string["user_password"] = "パスワード";
$string["unknown_user"] = "未知�?�ユーザ";
$string["you_are"] = "�?��?��?��?�";
$string["login"] = "ログイン";
$string["logoff"] = "ログオフ";

// Authentication database
$string["user_list"] = "ユーザリスト";
$string["edit_user"] = "ユーザを編集";
$string["delete_user"] = "�?��?�ユーザを削除";
//$string["user_name"]         = Use the same as above, for consistency.
//$string["user_password"]     = Use the same as above, for consistency.
$string["user_email"] = "Eメールアドレス";
$string["password_twice"] = "パスワードを変更�?��?��?�場�?��?��?新�?��?�パスワードを2回入力�?��?��??�?��?��?�";
$string["passwords_not_eq"] = "エラー: パスワード�?�一致�?��?��?�ん。";
$string["add_new_user"] = "新�?��?�ユーザを追加";
$string["rights"] = "権�?";
$string["action"] = "処置";
$string["user"] = "ユーザ";
$string["administrator"] = "管�?�者";
$string["unknown"] = "�?明";
$string["ok"] = "OK";
$string["show_my_entries"] = "クリック�?��?��?今後�?�エントリを表示�?�る";
$string["no_users_initial"] = "�?期�?�ユーザを作�?�?�能�?�ユーザ�?��?データベース�?�存在�?��?��?�ん。";
$string["no_users_create_first_admin"] = "管�?�者権�?を�?�?�ユーザを作�?�?�る�?��?管�?�者権�?ユーザ�?�ログイン�?��?��?他ユーザを作�?�?�る�?��?��?��?�能�?��?�り�?��?�。";

// Used in search.php
$string["invalid_search"] = "検索語�?�空�?��?��?��?正�?��?�。";
$string["search_results"] = "検索�?果:";
$string["nothing_found"] = "一致�?�るエントリ�?�見�?��?�り�?��?�ん�?��?��?�。";
$string["records"] = "履歴";
$string["through"] = "�?�ら";
$string["of"] = ", 該当件数";
$string["previous"] = "�?";
$string["next"] = "次";
$string["entry"] = "エントリ";
$string["view"] = "表示";
$string["advanced_search"] = "高度�?�検索";
$string["search_button"] = "検索";
$string["search_for"] = "検索語";
$string["from"] = "始点";

// Used in report.php
$string["report_on"] = "会�?��?�報告";
$string["report_start"] = "報告開始日";
$string["report_end"] = "報告終了日";
$string["match_area"] = "部署�?�一致";
$string["match_room"] = "部屋�?�一致";
$string["match_type"] = "形態�?�一致";
$string["ctrl_click_type"] = "複数�?�形態を�?�択�?�る�?��??�?��?Controlキーを押�?��?��?�らクリック�?��?��??�?��?��?�。";
$string["match_entry"] = "簡�?��?�説明�?��?�一致";
$string["match_descr"] = "詳細�?�説明�?��?�一致";
$string["include"] = "報告内容";
$string["report_only"] = "報告�?��?�";
$string["summary_only"] = "�?約�?��?�";
$string["report_and_summary"] = "報告�?��?約";
$string["summarize_by"] = "�?約�?��?��?��?方";
$string["sum_by_descrip"] = "簡�?��?�説明";
$string["sum_by_creator"] = "予約者";
$string["entry_found"] = "個�?�エントリー�?�見�?��?�り�?��?��?�";
$string["entries_found"] = "個�?�エントリー�?�見�?��?�り�?��?��?�";
$string["summary_header"] = "予約時間数�?��?約 (括弧内�?�エントリー数)";
$string["summary_header_per"] = "予約時間帯数�?��?約 (括弧内�?�エントリー数)";
$string["total"] = "計";
$string["submitquery"] = "報告�?�作�?";
$string["sort_rep"] = "報告�?�並�?�方";
$string["sort_rep_time"] = "開始日時";
$string["rep_dsp"] = "報告�?�表示";
$string["rep_dsp_dur"] = "使用期間";
$string["rep_dsp_end"] = "終了時刻";

// Used in week.php
$string["weekbefore"] = "�?�?�週�?�移動";
$string["weekafter"] = "次�?�週�?�移動";
$string["gotothisweek"] = "今週�?�移動";

// Used in month.php
$string["monthbefore"] = "�?�?�月�?�移動";
$string["monthafter"] = "次�?�月�?�移動";
$string["gotothismonth"] = "今月�?�移動";

// Used in {day week month}.php
$string["no_rooms_for_area"] = "�?��?�部署�?��?�部屋�?�設定�?�れ�?��?��?��?�ん";

// Used in admin.php
$string["edit"] = "編集";
$string["delete"] = "削除";
$string["rooms"] = "部屋";
$string["in"] = "-";
$string["noareas"] = "部署�?��?�り�?��?�ん。";
$string["addarea"] = "部署を追加";
$string["name"] = "�??称";
$string["noarea"] = "部署�?��?�択�?�れ�?��?��?��?�ん";
$string["browserlang"] = "�?�使�?��?�ブラウザ�?�言語設定�?��?次�?�順�?�?�設定�?�れ�?��?��?��?�。";
$string["addroom"] = "部屋を追加";
$string["capacity"] = "�?�容人数";
$string["norooms"] = "部屋�?��?�り�?��?�ん。";
$string["administration"] = "管�?�";

// Used in edit_area_room.php
$string["editarea"] = "部署を編集";
$string["change"] = "変更";
$string["backadmin"] = "管�?�画�?��?�戻る";
$string["editroomarea"] = "部署や部屋�?�説明";
$string["editroom"] = "部屋を編集";
$string["update_room_failed"] = "部屋�?�更新�?�失敗�?��?��?��?�: ";
$string["error_room"] = "エラー: 部屋 ";
$string["not_found"] = "�?�見�?��?�り�?��?�ん�?��?��?�";
$string["update_area_failed"] = "部署�?�更新�?�失敗�?��?��?��?�: ";
$string["error_area"] = "エラー: 部署 ";
$string["room_admin_email"] = "部屋�?�管�?�者�?�Eメール";
$string["area_admin_email"] = "部署�?�管�?�者�?�Eメール";
$string["invalid_email"] = "�?正�?��?�Eメール�?��?�!";

// Used in del.php
$string["deletefollowing"] = "以下�?�予約を削除�?��?��?�";
$string["sure"] = "よ�?�?��?��?��?��?�?";
$string["YES"] = "�?��?�";
$string["NO"] = "�?��?��?�";
$string["delarea"] = "削除�?�る�?�?��?�?��?�部署�?�属�?�る全�?��?�部屋を削除�?��?��?�れ�?��?�り�?��?�ん。<p>";

// Used in help.php
$string["about_mrbs"] = "MRBS�?��?��?��?�";
$string["database"] = "データベース";
$string["system"] = "システム";
$string["servertime"] = "サー�?時間";
$string["please_contact"] = "�?��?��?�答�?��?��?��?�質�?�?��?";
$string["for_any_questions"] = "�?��?�尋�?��??�?��?��?�。";

// Used in mysql.inc AND pgsql.inc
$string["failed_connect_db"] = "致命的�?�エラー: データベース�?�接続�?��??�?��?�ん。";
