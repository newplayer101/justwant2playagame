=== Youtube Showcase ===
Contributors: emarket-design
Plugin URI: https://emdplugins.com
Author URI: https://emarketdesign.com
Donate link: https://emarketdesign.com/donate-emarket-design/
Requires at least: 4.0
Tested up to: 4.5.2
Stable tag: 2.3.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: youtube,video,video gallery,youtube gallery,youtube widget,embed videos,embed youtube,simple youtube,simple videos,simple video gallery,simple gallery,sidebar videos,video plugin,youtube plugin,responsive,video posts,videos,youtube player,featured videos,recent videos,youtube sidebar widget, youtube api, YouTube API,youtube view count,youtube duration,youtube statistics,view count,favorite count,video duration,video statistics,youtube views

YouTube Showcase is a powerful but simple-to-use YouTube video gallery plugin with responsive frontend.

== Description ==

Each video resides on its own page with WordPress comments enabled. Video pages are automatically created when you insert the YouTube VIDEO ID on the video page.

YouTube Video ID is a 11 character string that YouTube uses to uniquely identify each video. For example, the video at https://www.youtube.com/watch?v=9K4uBRkFJEU has the id 9K4uBRkFJEU.

Using video thumbnail quality option for videos, you can change the dimensions of thumbnails offered by YouTube. For example, you can use an image 4:3 ratio instead of default 16:9. However, you should stick to this ratio for all videos.

YouTube Showcase is designed and developed without writing a single line of PHP code using [WP App Studio](https://wpas.emdplugins.com) WordPress Design and Development Platform.

>[Plugin Documentation](https://docs.emdplugins.com/docs/youtube-showcase-community-documentation/)<br>

After you install our plugin you will see our setup assistant which creates all the required pages, ready to use.

Two Video Gallery pages are provided:

* Video Gallery
* Video Grid Gallery

<strong>Video Gallery</strong><br>
* Displays video thumbnail navigation at the bottom.
* Videos are paged after every 16th video. Page navigation is available. You can adjust the number of videos shown with a shortcode.
* For phones, thumbnail navigation is replaced with two large size PREV and NEXT icons.
* Videos are ordered by latest video first

<strong>Video Grid Gallery</strong><br>
Displays high resolution video thumbnails in a 4 column responsive layout.

You can build your galleries by adding the VIDEO ID for the videos you’d like. You can add Content and Excerpt for every video. The video CONTENT text is displayed in the video page. The video EXCERPT is displayed in *Video Gallery* page, right below the main video.

All videos are responsive and adjusts to the container so you do not need to give height or weight.

Comes with two sidebar widgets:

* Featured Videos
* Recent Videos

<strong>Featured Videos</strong><br>
Displays the videos you selected as featured in your video page on your sidebar.

<strong>Recent Videos</strong><br>
Displays your recently posted videos on the sidebar.

> <strong>YouTube Showcase Pro </strong> <br>
> <strong>Create a unique video experience</strong><br>
<strong>YouTube Showcase Professional edition features:</strong><br>
   * Ability to display YouTube videos, channels, search results, and custom playlists. Create them in one place, display them everywhere.<br>
   * Use Visual Shortcode Builder to display only what you want, how you want. <br>
   * 40-65% faster page loads with on-demand video embedding.<br>
   * Create connections between your videos and display them in the video page.<br>
   * Fully translatable to any language like any other [WP App Studio](https://wpas.emdplugins.com) plugin.<br>
   * Ability to set video thumbnail image independent of the video owner. If the video is for a single video and the custom image is not set, it uses the YouTube thumbnail image.<br>
   * Advanced admin area video filtering; create/ save filters, sort, drag and drop video order, display/hide columns and more.<br>
   * Pick and choose from the available 8 different video stats to display them on the front end.<br>
   * 10+ Responsive Gallery Views to display your videos. Full set all matching each other with look and feel to provide uniform viewing experience.<br>
   * Customize the player with all the options available in YouTube API V3.<br>
   * Custom video comments matching your theme's styles. The video comments don't mix with the post comments and displayed in separate menu.<br>
   * Custom video tagging and categorization. Display your collection with custom video taxonomies. They do not mix with post tag or category taxonomies.<br>
   * Showcase recent and featured videos on your sidebar. Widgets are displayed using custom image thumbnail; faster page loads, full customization.<br>
   * Easy setup with optional page creation. Activate and go.<br>
   * If you need new features or customization, let us know by opening a [support ticket](https://support.emarketdesign.com).</br>

[YouTube Showcase Professional Edition](https://emdplugins.com/plugins/youtube-showcase-professional/)

[YouTube Showcase Professional DEMO](https://ytshowcase.emdplugins.com/)

<strong>Shortcodes Examples</strong><br>
* Display 5 videos per page. If you have more than 5 videos, it will display a page navigation bar:<br>
[video_grid filter="misc::posts_per_page::is::5;"]<br>
[video_gallery filter="misc::posts_per_page::is::5;"]<br>
* Display videos with category "yoyoma".<br>
[video_grid filter="tax::category::is::yoyoma;"]<br>
[video_gallery filter="tax::category::is::yoyoma;"]<br>
* Display videos with tag "yoyoma".<br>
[video_grid filter="tax::tag::is::yoyoma;"]<br>
[video_gallery filter="tax::tag::is::yoyoma;"]<br>

> <strong>Customization using your WP App Studio ProDev API account</strong><br>
> YouTube Showcase is designed and developed using WP App Studio AUTOBAHN (4.3+) without writing a single line of PHP code. Customize it to your needs by: <br>
> 1. [Download App signature.](https://emdplugins.com/designs/)<br>
> 2. [Download WP App Studio.](https://wordpress.org/plugins/wp-app-studio/) <br>
> 3. [Import App signature to WP App Studio AUTOBAHN by clicking on Import button in the app list screen](https://kb.emdplugins.com/articles/importing-and-exporting-apps/)<br>
> 4. [Purchase or use your existing ProDev account. You need to purchase ProDev API access if you don't already have one.](https://wpas.emdplugins.com/)<br>
> 5. Go to WP App Studio menu Applications page Click on the app signature imported and change the *app name* and *text domain* to your ProDev *app name* and *text domain* you purchased.<br>
> 6. Make modifications to the design and Generate your plugin.<br>
> 7. Download/Install/Activate your plugin.<br>
> 8. Set your ProDev license in your plugins setting page, licenses tab. You have 1 year to customize, update your plugin. After initial activation, all other updates are done through WordPress Plugin page like other WP plugins.<br>

== Installation ==

The simplest way to install is to click on 'Plugins' then 'Add' and type 'Youtube Showcase' in the search field.

= Manual Installation Type 1 =

* Login to your website and go to the Plugins section of your admin panel.
* Click the Add New button.
* Under Install Plugins, click the Upload link.
* Select the plugin zip file from your computer then click the Install Now button.
* You should see a message stating that the plugin was installed successfully.
* Click the Activate Plugin link.

= Manual Installation Type 2 =

* You should have access to the server where WordPress is installed. If you don't, see your system administrator.
* Copy the plugin zip file up to your server and unzip it somewhere on the file system.
* Copy the "youtube-showcase" folder into the /wp-content/plugins directory of your WordPress installation.
* Login to your website and go to the Plugins section of your admin panel.
* Look for "Youtube Showcase" and click Activate.

== Screenshots ==
1. Displays a responsive video gallery with thumbnail navigation created automatically during plugin setup
2. Hides thumbnail navigation for devices with screen sizes below 768px.
3. Displays a 4 column responsive video grid gallery created automatically during plugin setup
4. Each video resides on its own page with WordPress comments enabled, optionally you could display Featured and Recent Sidebar Widgets
5. Enter your videos using a simple and intuitive interface from admin video editor
6. YouTube Showcase PRO Edition offers 40-65% faster page loads, many advanced video management,player configuration, and display options. Highly recommended for site owners.


== Changelog ==
= 2.3.0 =
* Misc. minor bug fixes and code improvements
= 2.2.0 =
* Compatibility with WordPress 4.5 and misc. bug fixes
* Added ability to disable/enable thumbs navigation in mobile devices
= 2.1.0 =
* Fixed video audio playing after the second video clicked issue in video gallery view. Thanks for @ebimania and @nata_r10 reporting and helping in resolution
= 2.0.0 =
* Changed the order of the videos Descending to display the new videos first in the gallery
* Enabled thumb navigation for tablets
* Changed the video displayed per page to 16 for Grid and Thumbs
* Adjusted grid column numbers 6(Large), 4(Medium) and 3(Small) devices
* Enabled page navigation on Video Grid Gallery
* Added title link to video single page in Video Gallery
* Added video title to video grid gallery
= 1.4.1 =
* Fixed the video navigation issue when WordPress is installed in subdirectory.
* Fixed setting translation issue
= 1.4.0 =
* Fixed the issue related to HTML5 video player not playing by default
* Fixed the issue related to videos not displayed on the gallery (Blank video image was showing) when clicked on video thumbnail
= 1.3.0 =
* Added ability to enable or disable thumbnail navigation for the screens less than 768px
* Added ability to enable or disable video autoplay
* Removed unnecessary CSS rules
= 1.2.0 =
* NEW Added Video thumbnail quality option for videos so that you can change the dimensions of thumbnails offered by YouTube. For example, you can use an image 4:3 ratio instead of default 16:9. However, you should stick to this ratio for all videos.
* Fixed various CSS related issues
* Removed title from widgets link text and moved it to the link title attribute. When you hover over the image, you will see the title of the video.
* Released Pro Version
= 1.1.1 =
* Fix update related defect
= 1.1.0 =
* Moved responsive arrow head icons closer to the video
* Improved compatibility with the other themes and plugins.
* Updated textdomain and translation filenames
= 1.0.1 =
* Cleaned up the code related to Video Grid
* Fixed issue with Video Grid Gallery Navigation
= 1.0.0 =
* Initial release
