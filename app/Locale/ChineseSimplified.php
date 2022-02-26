<?php

namespace App\Locale;

use App\Contracts\Language;

final class ChineseSimplified implements Language
{
	public function code(): string
	{
		return '简体中文';
	}

	public function get_locale(): array
	{
		$locale = [
			'USERNAME' => '用户名',
			'PASSWORD' => '密码',
			'ENTER' => '确定',
			'CANCEL' => '取消',
			'SIGN_IN' => '登录',
			'CLOSE' => '关闭',
			'SETTINGS' => '设置',
			'SEARCH' => '搜索 ...',
			'MORE' => '更多',
			'DEFAULT' => '默认',

			'USERS' => '用户',
			'U2F' => '通用两步验证（U2F）',
			'NOTIFICATIONS' => 'Notifications',
			'SHARING' => '共享',
			'CHANGE_LOGIN' => '修改登录信息',
			'CHANGE_SORTING' => '修改排序',
			'SET_DROPBOX' => '设置 Dropbox',
			'ABOUT_LYCHEE' => '关于 Lychee',
			'DIAGNOSTICS' => '诊断',
			'DIAGNOSTICS_GET_SIZE' => '请求空间占用信息',
			'LOGS' => '查看日志',
			'SIGN_OUT' => '注销登录',
			'UPDATE_AVAILABLE' => '可用更新！',
			'MIGRATION_AVAILABLE' => '可用迁移！',
			'DEFAULT_LICENSE' => '为新上传设置默认许可证：',
			'SET_LICENSE' => '设置许可证',
			'SET_OVERLAY_TYPE' => '设置叠层',
			'SET_MAP_PROVIDER' => '设置 OpenStreetMap 图层提供者',

			'SMART_ALBUMS' => '智能相册',
			'SHARED_ALBUMS' => '已共享的相册',
			'ALBUMS' => '相册',
			'PHOTOS' => '照片',
			'SEARCH_RESULTS' => '搜索结果',

			'RENAME' => '重命名',
			'RENAME_ALL' => '重命名已选中',
			'MERGE' => '合并',
			'MERGE_ALL' => '合并选中',
			'MAKE_PUBLIC' => '设为公开',
			'SHARE_ALBUM' => '分享相册',
			'SHARE_PHOTO' => '分享照片',
			'VISIBILITY_ALBUM' => '相册可见性',
			'VISIBILITY_PHOTO' => '照片可见性',
			'DOWNLOAD_ALBUM' => '下载相册',
			'ABOUT_ALBUM' => '关于相册',
			'DELETE_ALBUM' => '删除相册',
			'MOVE_ALBUM' => '移动相册',
			'FULLSCREEN_ENTER' => '进入全屏幕',
			'FULLSCREEN_EXIT' => '退出全屏幕',

			'SHARING_ALBUM_USERS' => 'Share this album with users',
			'WAIT_FETCH_DATA' => 'Please wait while we get the data...',
			'SHARING_ALBUM_USERS_NO_USERS' => 'There are no users to share the album with',
			'SHARING_ALBUM_USERS_LONG_MESSAGE' => 'Select the users to share this album with',

			'DELETE_ALBUM_QUESTION' => '删除相册和照片',
			'KEEP_ALBUM' => '保留相册',
			'DELETE_ALBUM_CONFIRMATION_1' => '是否确认删除相册',
			'DELETE_ALBUM_CONFIRMATION_2' => '以及相册中包含的所有照片？操作后不可恢复！',

			'DELETE_ALBUMS_QUESTION' => '删除相册和照片',
			'KEEP_ALBUMS' => '保留相册',
			'DELETE_ALBUMS_CONFIRMATION_1' => '是否确认删除全部',
			'DELETE_ALBUMS_CONFIRMATION_2' => '选中的相册和其中的所有照片？操作后不可恢复！',

			'DELETE_UNSORTED_CONFIRM' => '是否确认删除\'未分类\'的所有照片？<br>操作后不可恢复！',
			'CLEAR_UNSORTED' => '清除未分类',
			'KEEP_UNSORTED' => '保留未分类',

			'EDIT_SHARING' => '编辑共享',
			'MAKE_PRIVATE' => '设为私有',

			'CLOSE_ALBUM' => '关闭相册',
			'CLOSE_PHOTO' => '关闭照片',
			'CLOSE_MAP' => '关闭地图',

			'ADD' => '添加',
			'MOVE' => '移动',
			'MOVE_ALL' => '移动选中',
			'DUPLICATE' => '创建副本',
			'DUPLICATE_ALL' => '复制选定的',
			'COPY_TO' => '复制到...',
			'COPY_ALL_TO' => '选定副本到...',
			'DELETE' => '删除',
			'DELETE_ALL' => '删除已选中',
			'DOWNLOAD' => '下载',
			'DOWNLOAD_ALL' => '下载已选中',
			'UPLOAD_PHOTO' => '上传相片',
			'IMPORT_LINK' => '从链接导入',
			'IMPORT_DROPBOX' => '从 Dropbox 导入',
			'IMPORT_SERVER' => '从服务器导入',
			'NEW_ALBUM' => '新建相册',
			'NEW_TAG_ALBUM' => '新建标签相册',

			'TITLE_NEW_ALBUM' => '输入新相册的标题：',
			'UNTITLED' => '未命名',
			'UNSORTED' => '未分类',
			'STARRED' => '星标',
			'RECENT' => '最新',
			'PUBLIC' => '公开',
			'NUM_PHOTOS' => '照片',

			'CREATE_ALBUM' => '创建相册',
			'CREATE_TAG_ALBUM' => '创建标签相册',

			'STAR_PHOTO' => '星标此照片',
			'STAR' => '星标',
			'STAR_ALL' => '为所选照片加星标',
			'TAGS' => '标签',
			'TAGS_ALL' => '为所选照片打标签',
			'UNSTAR_PHOTO' => '取消星标',
			'SET_COVER' => '设置为相册封面',
			'REMOVE_COVER' => '取消设置为相册封面',

			'FULL_PHOTO' => '打开原图',
			'ABOUT_PHOTO' => '关于照片',
			'DISPLAY_FULL_MAP' => '地图',
			'DIRECT_LINK' => '直链',
			'DIRECT_LINKS' => '直链',

			'ALBUM_ABOUT' => '关于',
			'ALBUM_BASICS' => '基本信息',
			'ALBUM_TITLE' => '标题',
			'ALBUM_NEW_TITLE' => '输入新的相册标题：',
			'ALBUMS_NEW_TITLE_1' => '设置标题为',
			'ALBUMS_NEW_TITLE_2' => '已选择的相册：',
			'ALBUM_SET_TITLE' => '设置标题',
			'ALBUM_DESCRIPTION' => '描述',
			'ALBUM_SHOW_TAGS' => '要显示的标签',
			'ALBUM_NEW_DESCRIPTION' => '输入新的相册描述：',
			'ALBUM_SET_DESCRIPTION' => '设置描述',
			'ALBUM_NEW_SHOWTAGS' => '输入将在此相册中可见的照片的标签：',
			'ALBUM_SET_SHOWTAGS' => '设置要显示的标签',
			'ALBUM_ALBUM' => '相册',
			'ALBUM_CREATED' => '创建时间',
			'ALBUM_IMAGES' => '图片数',
			'ALBUM_VIDEOS' => '视频数',
			'ALBUM_SUBALBUMS' => '子相册数',
			'ALBUM_OWNER' => 'Owner',
			'ALBUM_SHARING' => '共享',
			'ALBUM_SHR_YES' => '是',
			'ALBUM_SHR_NO' => '否',
			'ALBUM_PUBLIC' => '公开',
			'ALBUM_PUBLIC_EXPL' => '相册可被他人查看，但需遵守以下限制。',
			'ALBUM_FULL' => '原始图像',
			'ALBUM_FULL_EXPL' => '完整分辨率图像可用。',
			'ALBUM_HIDDEN' => '隐藏',
			'ALBUM_HIDDEN_EXPL' => '只有拥有直链的人才能查看此相册。',
			'ALBUM_MARK_NSFW' => '将相册标记为敏感内容',
			'ALBUM_UNMARK_NSFW' => '取消相册的敏感内容标记',
			'ALBUM_NSFW' => '敏感内容',
			'ALBUM_NSFW_EXPL' => '相册被标记为包含敏感内容。',
			'ALBUM_DOWNLOADABLE' => '可下载',
			'ALBUM_DOWNLOADABLE_EXPL' => '您画廊的访客可以下载此相册。',
			'ALBUM_SHARE_BUTTON_VISIBLE' => '分享按钮可见',
			'ALBUM_SHARE_BUTTON_VISIBLE_EXPL' => '显示社交媒体分享链接。',
			'ALBUM_PASSWORD' => '密码',
			'ALBUM_PASSWORD_PROT' => '受到密码保护',
			'ALBUM_PASSWORD_PROT_EXPL' => '只有使用正确的密码才可以访问相册。',
			'ALBUM_PASSWORD_REQUIRED' => '此相册受到密码保护。请在下方输入密码以查看相册内的照片：',
			'ALBUM_MERGE_1' => '你确定要合并相册',
			'ALBUM_MERGE_2' => '到相册',
			'ALBUMS_MERGE' => '你确定要合并所有已选择的相册到相册',
			'MERGE_ALBUM' => '合并相册',
			'DONT_MERGE' => '不要合并',
			'ALBUM_MOVE_1' => '你确定要移动相册',
			'ALBUM_MOVE_2' => '到相册',
			'ALBUMS_MOVE' => '你确定要移动所有已选择的相册到相册',
			'MOVE_ALBUMS' => '移动相册',
			'NOT_MOVE_ALBUMS' => '不要移动',
			'ROOT' => '相册',
			'ALBUM_REUSE' => '重用',
			'ALBUM_LICENSE' => '许可证',
			'ALBUM_SET_LICENSE' => '设置许可证',
			'ALBUM_LICENSE_HELP' => '需要有关选择的帮助吗？',
			'ALBUM_LICENSE_NONE' => '无',
			'ALBUM_RESERVED' => '所有权利保留',
			'ALBUM_SET_ORDER' => '设置排序',
			'ALBUM_ORDERING' => '排序依据',

			'PHOTO_ABOUT' => '关于',
			'PHOTO_BASICS' => '基本信息',
			'PHOTO_TITLE' => '标题',
			'PHOTO_NEW_TITLE' => '输入新的照片标题：',
			'PHOTO_SET_TITLE' => '设置标题',
			'PHOTO_UPLOADED' => '已上传',
			'PHOTO_DESCRIPTION' => '描述',
			'PHOTO_NEW_DESCRIPTION' => '输入新的照片描述',
			'PHOTO_SET_DESCRIPTION' => '设置描述',
			'PHOTO_NEW_LICENSE' => '添加许可证',
			'PHOTO_SET_LICENSE' => '设置许可证',
			'PHOTO_LICENSE' => '许可证',
			'PHOTO_REUSE' => '重用',
			'PHOTO_LICENSE_NONE' => '无',
			'PHOTO_RESERVED' => '所有权利保留',
			'PHOTO_LATITUDE' => '纬度',
			'PHOTO_LONGITUDE' => '经度',
			'PHOTO_ALTITUDE' => '海拔',
			'PHOTO_IMGDIRECTION' => '方向',
			'PHOTO_LOCATION' => '地点',
			'PHOTO_IMAGE' => '图片信息',
			'PHOTO_VIDEO' => '视频',
			'PHOTO_SIZE' => '大小',
			'PHOTO_FORMAT' => '格式',
			'PHOTO_RESOLUTION' => '分辨率',
			'PHOTO_DURATION' => '时长',
			'PHOTO_FPS' => '帧率',
			'PHOTO_TAGS' => '标签',
			'PHOTO_NOTAGS' => '无标签',
			'PHOTO_NEW_TAGS' => '为该照片添加标签。你可以用逗号分隔多个标签：',
			'PHOTO_NEW_TAGS_1' => '设置你的标签于',
			'PHOTO_NEW_TAGS_2' => '已选择的照片。已存在的标签会被覆盖。你可以用逗号分隔多个标签：',
			'PHOTO_SET_TAGS' => '设置标签',
			'PHOTO_CAMERA' => '相机信息',
			'PHOTO_CAPTURED' => '拍摄时间',
			'PHOTO_MAKE' => '设备',
			'PHOTO_TYPE' => '类型/型号',
			'PHOTO_LENS' => '镜头',
			'PHOTO_SHUTTER' => '快门速度',
			'PHOTO_APERTURE' => '光圈',
			'PHOTO_FOCAL' => '焦距',
			'PHOTO_ISO' => '感光度',
			'PHOTO_SHARING' => '共享',
			'PHOTO_SHR_PLUBLIC' => '公开',
			'PHOTO_SHR_ALB' => '是 (相册)',
			'PHOTO_SHR_PHT' => '是 (照片)',
			'PHOTO_SHR_NO' => '否',
			'PHOTO_DELETE' => '删除照片',
			'PHOTO_KEEP' => '保留照片',
			'PHOTO_DELETE_1' => '是否要删除照片',
			'PHOTO_DELETE_2' => '？此操作不可恢复！',
			'PHOTO_DELETE_ALL_1' => '是否要删除全部',
			'PHOTO_DELETE_ALL_2' => '已选择的照片？此操作不可恢复！',
			'PHOTOS_NEW_TITLE_1' => '设置照片标题于',
			'PHOTOS_NEW_TITLE_2' => '已选择的照片：',
			'PHOTO_MAKE_PRIVATE_ALBUM' => '此照片位于公开相册中。要使其私有或公开，请编辑所在相册的可见性。',
			'PHOTO_SHOW_ALBUM' => '显示相册',
			'PHOTO_PUBLIC' => '公开',
			'PHOTO_PUBLIC_EXPL' => '照片可被他人查看，但需遵守以下限制。',
			'PHOTO_FULL' => '原始图像',
			'PHOTO_FULL_EXPL' => '完整分辨率图像可用。',
			'PHOTO_HIDDEN' => '隐藏',
			'PHOTO_HIDDEN_EXPL' => '只有拥有直链的人才能查看此照片。',
			'PHOTO_DOWNLOADABLE' => '可下载',
			'PHOTO_DOWNLOADABLE_EXPL' => '您画廊的访客可以下载此照片。',
			'PHOTO_SHARE_BUTTON_VISIBLE' => '分享按钮可见',
			'PHOTO_SHARE_BUTTON_VISIBLE_EXPL' => '显示社交媒体分享链接。',
			'PHOTO_PASSWORD_PROT' => '受到密码保护',
			'PHOTO_PASSWORD_PROT_EXPL' => '只有使用正确的密码才可以访问照片。',
			'PHOTO_EDIT_SHARING_TEXT' => '此照片的共享属性将被修改为：',
			'PHOTO_NO_EDIT_SHARING_TEXT' => '因为此照片位于一个公开相册中，其继承了相册的可见性设置。其当前的可见性仅在下方作为提示的作用而显示。',
			'PHOTO_EDIT_GLOBAL_SHARING_TEXT' => '
			此照片的可见性可以使用全局的 Lychee 设置进行更细致的调整。其当前的可见性仅在下方作为提示的作用而显示。',
			'PHOTO_SHARING_CONFIRM' => '保存',

			'LOADING' => '载入中',
			'ERROR' => '错误',
			'ERROR_TEXT' => '噢，似乎出了一些问题。请刷新页面后再试！',
			'ERROR_DB_1' => '无法连接主机数据库，访问被拒绝。请仔细检查主机、用户名和密码，确保其允许从当前位置访问。',
			'ERROR_DB_2' => '无法创建数据库。请仔细检查主机、用户名和密码，确保指定的用户拥有在数据库中修改和添加内容的权限。',
			'ERROR_CONFIG_FILE' => "无法保存此配置。<b>'data/'</b> 拒绝访问。请为其他用户设置 <b>'data/'</b> 和 <b>'uploads/'</b> 目录的读、写权限。查看自述文件以获取更多信息。",
			'ERROR_UNKNOWN' => '发生未知问题。请再试一次，检查您的安装和服务器。请查看自述文件以获取更多信息。',
			'ERROR_LOGIN' => '无法保存登录信息。请用另一个用户名和密码再试一次！',
			'ERROR_MAP_DEACTIVATED' => '地图功能已在设置中停用。',
			'ERROR_SEARCH_DEACTIVATED' => '搜索功能已在设置中停用。',
			'SUCCESS' => 'OK',
			'RETRY' => '重试',

			'SETTINGS_SUCCESS_LOGIN' => '登录信息已更新.',
			'SETTINGS_SUCCESS_SORT' => '排序顺序已更新。',
			'SETTINGS_SUCCESS_DROPBOX' => 'Dropbox 密钥已更新。',
			'SETTINGS_SUCCESS_LANG' => '语言已更新。',
			'SETTINGS_SUCCESS_LAYOUT' => '布局已更新',
			'SETTINGS_SUCCESS_IMAGE_OVERLAY' => 'EXIF 叠层设置已更新',
			'SETTINGS_SUCCESS_PUBLIC_SEARCH' => '公开搜索已更新',
			'SETTINGS_SUCCESS_LICENSE' => '默认许可证已更新',
			'SETTINGS_SUCCESS_MAP_DISPLAY' => '地图显示设置已更新',
			'SETTINGS_SUCCESS_MAP_DISPLAY_PUBLIC' => '公开相册的地图显示设置已更新',
			'SETTINGS_SUCCESS_MAP_PROVIDER' => '地图供应商设置已更新',

			'U2F_NOT_SUPPORTED' => 'U2F 不被支持。 抱歉。',
			'U2F_NOT_SECURE' => '环境不安全。U2F 不可用',
			'U2F_REGISTER_KEY' => '注册新设备。',
			'U2F_REGISTRATION_SUCCESS' => '注册成功！',
			'U2F_AUTHENTIFICATION_SUCCESS' => '认证成功！',
			'U2F_CREDENTIALS' => '认证信息',
			'U2F_CREDENTIALS_DELETED' => '认证信息已删除！',

			'NEW_PHOTOS_NOTIFICATION' => 'Send new photos notification emails.',
			'SETTINGS_SUCCESS_NEW_PHOTOS_NOTIFICATION' => 'New photos notification updated',
			'USER_EMAIL_INSTRUCTION' => 'Add your email below to enable receiving email notifications.<br />To stop receiving emails, simply remove your email below.',

			'DB_INFO_TITLE' => '请在下方输入你的数据库连接信息：',
			'DB_INFO_HOST' => '数据库主机（可选）',
			'DB_INFO_USER' => '数据库用户名',
			'DB_INFO_PASSWORD' => '数据库密码',
			'DB_INFO_TEXT' => 'Lychee 将创建自己的数据库。如果需要，你可以输入已有数据库的名称：',
			'DB_NAME' => '数据库名称（可选）',
			'DB_PREFIX' => '表前缀（可选）',
			'DB_CONNECT' => '连接',

			'LOGIN_TITLE' => '输入管理员用户名和密码：',
			'LOGIN_USERNAME' => '新用户名',
			'LOGIN_PASSWORD' => '新密码',
			'LOGIN_PASSWORD_CONFIRM' => '确认密码',
			'LOGIN_CREATE' => '创建',

			'PASSWORD_TITLE' => '输入您当前的密码：',
			'USERNAME_CURRENT' => '当前用户名',
			'PASSWORD_CURRENT' => '当前密码',
			'PASSWORD_TEXT' => '您的用户名和密码将被修改为：',
			'PASSWORD_CHANGE' => '修改登录信息',

			'EDIT_SHARING_TITLE' => '编辑共享',
			'EDIT_SHARING_TEXT' => '此相册的共享属性将被修改为：',
			'SHARE_ALBUM_TEXT' => '此相册将会以下列的属性共享：',
			'ALBUM_SHARING_CONFIRM' => '保存',

			'SORT_ALBUM_BY_1' => '相册排序：根据',
			'SORT_ALBUM_BY_2' => '的',
			'SORT_ALBUM_BY_3' => '排序。',

			'SORT_ALBUM_SELECT_1' => '创建时间',
			'SORT_ALBUM_SELECT_2' => '标题',
			'SORT_ALBUM_SELECT_3' => '描述',
			'SORT_ALBUM_SELECT_4' => '公开',
			'SORT_ALBUM_SELECT_5' => '最新',
			'SORT_ALBUM_SELECT_6' => '最老',

			'SORT_PHOTO_BY_1' => '照片排序：根据',
			'SORT_PHOTO_BY_2' => '的',
			'SORT_PHOTO_BY_3' => '排序。',

			'SORT_PHOTO_SELECT_1' => '上传时间',
			'SORT_PHOTO_SELECT_2' => '创建时间',
			'SORT_PHOTO_SELECT_3' => '标题',
			'SORT_PHOTO_SELECT_4' => '描述',
			'SORT_PHOTO_SELECT_5' => '公开',
			'SORT_PHOTO_SELECT_6' => '喜欢',
			'SORT_PHOTO_SELECT_7' => '照片格式',

			'SORT_ASCENDING' => '升序',
			'SORT_DESCENDING' => '降序',
			'SORT_CHANGE' => '修改排序',

			'DROPBOX_TITLE' => '设置 Dropbox 密钥',
			'DROPBOX_TEXT' => "要从 Dropbox 导入照片，您需要一个有效的插件应用密钥，请转到 <a href='https://www.dropbox.com/developers/apps/create'>他们的网站</a>。为你自己生成个人密钥并输入到下面：",

			'LANG_TEXT' => '将 Lychee 的语言修改为：',
			'LANG_TITLE' => '修改语言',
			'PUBLIC_SEARCH_TEXT' => '允许公共搜索：',
			'OVERLAY_TYPE' => '用于图像叠层中的数据:',
			'OVERLAY_NONE' => 'No overlay',
			'OVERLAY_EXIF' => '照片 EXIF 数据',
			'OVERLAY_DESCRIPTION' => '照片描述',
			'OVERLAY_DATE' => '照片拍摄日期',
			'MAP_DISPLAY_TEXT' => '启用地图（由 OpenStreetMap 提供）：',
			'MAP_DISPLAY_PUBLIC_TEXT' => '为公共相册启用地图（由 OpenStreetMap 提供）：',
			'MAP_PROVIDER' => 'OpenStreetMap 图层提供者：',
			'MAP_PROVIDER_WIKIMEDIA' => 'Wikimedia',
			'MAP_PROVIDER_OSM_ORG' => 'OpenStreetMap.org（无 HiDPI）',
			'MAP_PROVIDER_OSM_DE' => 'OpenStreetMap.de（无 HiDPI）',
			'MAP_PROVIDER_OSM_FR' => 'OpenStreetMap.fr（无 HiDPI）',
			'MAP_PROVIDER_RRZE' => 'University of Erlangen, Germany（仅 HiDPI）',
			'MAP_INCLUDE_SUBALBUMS_TEXT' => '在地图上包含子相册的图片：',
			'LOCATION_DECODING' => '将 GPS 数据解码为地点名称',
			'LOCATION_SHOW' => '显示地点名称',
			'LOCATION_SHOW_PUBLIC' => '为公开模式显示地点名称',
			'LAYOUT_TYPE' => '照片布局：',
			'LAYOUT_SQUARES' => '方形缩略图',
			'LAYOUT_JUSTIFIED' => '保持长宽比，两端对齐',
			'LAYOUT_UNJUSTIFIED' => '保持长宽比，不对齐',
			'SET_LAYOUT' => '更改布局',

			'NSFW_VISIBLE_TEXT_1' => '使敏感相册默认可见。',
			'NSFW_VISIBLE_TEXT_2' => '如果相册是公开的，其将仍然可以访问，只是会从视图中隐藏并<b>可以通过按下<hkb>H</hkb>键来显示</b>。',
			'SETTINGS_SUCCESS_NSFW_VISIBLE' => '敏感相册的默认可见性成功更新。',

			'VIEW_NO_RESULT' => '无结果',
			'VIEW_NO_PUBLIC_ALBUMS' => '没有公开相册',
			'VIEW_NO_CONFIGURATION' => '没有配置',
			'VIEW_PHOTO_NOT_FOUND' => '照片未找到',

			'NO_TAGS' => '没有标签',

			'UPLOAD_MANAGE_NEW_PHOTOS' => '您现在可以管理您的新照片了。',
			'UPLOAD_COMPLETE' => '上传完成',
			'UPLOAD_COMPLETE_FAILED' => '有一个或多个照片上传失败。',
			'UPLOAD_IMPORTING' => '导入',
			'UPLOAD_IMPORTING_URL' => '导入 URL',
			'UPLOAD_UPLOADING' => '上传中',
			'UPLOAD_FINISHED' => '已完成',
			'UPLOAD_PROCESSING' => '处理中',
			'UPLOAD_FAILED' => '失败',
			'UPLOAD_FAILED_ERROR' => '上传失败。服务器返回了一个错误！',
			'UPLOAD_FAILED_WARNING' => '上传失败。服务器返回了一个警告！',
			'UPLOAD_CANCELLED' => 'Cancelled',
			'UPLOAD_SKIPPED' => '已跳过',
			'UPLOAD_UPDATED' => 'Updated',
			'UPLOAD_IMPORT_SKIPPED_DUPLICATE' => 'This photo has been skipped because it\'s already in your library.',
			'UPLOAD_IMPORT_RESYNCED_DUPLICATE' => 'This photo has been skipped because it\'s already in your library, but its metadata has been updated.',
			'UPLOAD_ERROR_CONSOLE' => '请查看浏览器控制台获取详细信息。',
			'UPLOAD_UNKNOWN' => '服务器返回未知响应。请查看浏览器控制台获取详细信息。',
			'UPLOAD_ERROR_UNKNOWN' => '上传失败。服务器返回了一个未知错误！',
			'UPLOAD_ERROR_POSTSIZE' => '上传失败。PHP 的 post_max_size 限制过小！',
			'UPLOAD_ERROR_FILESIZE' => '上传失败。PHP 的 upload_max_filesize 限制过小！',
			'UPLOAD_IN_PROGRESS' => 'Lychee 当前正在上传！',
			'UPLOAD_IMPORT_WARN_ERR' => '导入已完成，但返回了警告或错误。请查看日志（设置->显示日志）以获取详细信息。',
			'UPLOAD_IMPORT_COMPLETE' => '导入完成',
			'UPLOAD_IMPORT_INSTR' => '输入照片的直链以导入：',
			'UPLOAD_IMPORT' => '导入',
			'UPLOAD_IMPORT_SERVER' => '从服务器导入',
			'UPLOAD_IMPORT_SERVER_FOLD' => '文件夹为空或其中没有可读的文件。请查看日志（设置->显示日志）以获取详细信息。',
			'UPLOAD_IMPORT_SERVER_INSTR' => '此操作将会导入位于下列目录中的所有图片、文件夹和子文件夹。',
			'UPLOAD_ABSOLUTE_PATH' => '目录的绝对路径',
			'UPLOAD_IMPORT_SERVER_EMPT' => '无法导入空文件夹！',
			'UPLOAD_IMPORT_DELETE_ORIGINALS' => '删除原始图像',
			'UPLOAD_IMPORT_DELETE_ORIGINALS_EXPL' => '原始图像将在导入后尝试删除。',
			'UPLOAD_IMPORT_VIA_SYMLINK' => 'Symbolic links',
			'UPLOAD_IMPORT_VIA_SYMLINK_EXPL' => 'Import files using symbolic links to originals.',
			'UPLOAD_IMPORT_SKIP_DUPLICATES' => 'Skip duplicates',
			'UPLOAD_IMPORT_SKIP_DUPLICATES_EXPL' => 'Existing media files are skipped.',
			'UPLOAD_IMPORT_RESYNC_METADATA' => 'Re-sync metadata',
			'UPLOAD_IMPORT_RESYNC_METADATA_EXPL' => 'Update metadata of existing media files.',
			'UPLOAD_IMPORT_LOW_MEMORY' => '内存不足！',
			'UPLOAD_IMPORT_LOW_MEMORY_EXPL' => '此服务器上的导入进程已经接近内存上限并可能过早地被中断。',
			'UPLOAD_WARNING' => '警告',
			'UPLOAD_IMPORT_NOT_A_DIRECTORY' => '指定的路径不是一个可读的目录！',
			'UPLOAD_IMPORT_PATH_RESERVED' => '指定的路径是 Lychee 的保留目录！',
			'UPLOAD_IMPORT_UNREADABLE' => '不能读取文件！',
			'UPLOAD_IMPORT_FAILED' => '不能导入文件！',
			'UPLOAD_IMPORT_UNSUPPORTED' => '不支持的文件类型！',
			'UPLOAD_IMPORT_ALBUM_FAILED' => '不能创建相册！',
			'UPLOAD_IMPORT_CANCELLED' => 'Import cancelled',

			'ABOUT_SUBTITLE' => '自托管照片管理的正确之选',
			'ABOUT_DESCRIPTION' => '是一个自由的照片管理工具，其其运行于您的服务器或Web空间。仅需几分钟即可安装。Lychee 为您提供了像原生应用那样上传、管理和分享照片所需的一切，您的所有照片都将安全地存储。',
			'FOOTER_COPYRIGHT' => '本网站上的所有图像均受制于版权',
			'HOSTED_WITH_LYCHEE' => '由 Lychee 托管',

			'URL_COPY_TO_CLIPBOARD' => '复制到剪贴板',
			'URL_COPIED_TO_CLIPBOARD' => 'URL 已经复制到剪贴板！',
			'PHOTO_DIRECT_LINKS_TO_IMAGES' => '图像文件的直链：',
			'PHOTO_MEDIUM' => '中等尺寸',
			'PHOTO_MEDIUM_HIDPI' => '中等尺寸 HiDPI',
			'PHOTO_SMALL' => '缩略图',
			'PHOTO_SMALL_HIDPI' => '缩略图 HiDPI',
			'PHOTO_THUMB' => '方形缩略图',
			'PHOTO_THUMB_HIDPI' => '方形缩略图 HiDPI',
			'PHOTO_LIVE_VIDEO' => '实况照片（Live-Photo）的视频部分',
			'PHOTO_VIEW' => 'Lychee 照片查看:',

			'PHOTO_EDIT_ROTATECWISE' => '顺时针旋转',
			'PHOTO_EDIT_ROTATECCWISE' => '逆时针旋转',
		];

		return $locale;
	}
}
