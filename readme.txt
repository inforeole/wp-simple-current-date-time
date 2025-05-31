=== Simple Current Date Time ===
Contributors: inforeole
Donate link: https://inforeole.fr/
Tags: date, time, shortcode, localized date, dynamic title
Requires at least: 5.0
Tested up to: 6.8
Stable tag: 1.4
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Simple plugin for current, localized dates & times via shortcodes. Use in content, H1 & SEO titles. Lightweight.

== Description ==

"Simple Current Date Time" is a lightweight and straightforward WordPress plugin designed to effortlessly display dynamic date and time information on your website. It leverages WordPress's built-in date/time formatting, ensuring that the output is **automatically localized** according to your site's language settings. This makes it an ideal "date and time plugin for WordPress" for multilingual websites or any site needing accurate, localized date displays.

A key feature is its ability to parse these shortcodes not only in your post/page content but also directly within your **H1 headings and, importantly, in your SEO metatitles** (the `<title>` tag of your pages). This can be useful for creating dynamic, always-current titles.

**Main Shortcodes (English):**
* `[current_year]`
* `[current_month_year]`
* `[current_date_time]`

**French Aliases Also Available:**
* `[annee]` (for `[current_year]`)
* `[mois_annee]` (for `[current_month_year]`)
* `[date_heure_courante]` (for `[current_date_time]`)

**Why choose this plugin?**
* **Simplicity:** No complex settings. Just install, activate, and use the shortcodes.
* **Localized:** Automatically uses your WordPress date and time settings, respecting your chosen language and format. Perfect for international sites.
* **Lightweight:** Minimal code, ensuring no performance impact on your site.
* **SEO Friendly:** Use dynamic dates in your titles and meta titles easily.
* **Bilingual Shortcodes:** Use English shortcodes or their French aliases for convenience.

For more information, full documentation, and support, please visit [our plugin page on Inforeole.fr](https://inforeole.fr/simple-current-date-time-wordpress-plugin/).

== Installation ==

1.  Upload the `simple-current-date-time` folder (the entire plugin folder) to the `/wp-content/plugins/` directory.
2.  Or, upload the `simple-current-date-time.zip` file via "Plugins > Add New > Upload Plugin" in your WordPress admin area.
3.  Activate the plugin through the 'Plugins' menu in WordPress.
4.  Use the shortcodes (e.g., `[current_year]`, `[current_month_year]`, `[current_date_time]`, or their French aliases) in your posts, pages, widgets, H1 titles, or even configure them in your SEO plugin for the meta title.

== Frequently Asked Questions ==

= How are the date and time formatted? =
The `[current_date_time]` (or its French alias `[date_heure_courante]`) shortcode uses the "Date Format" and "Time Format" you have configured under "Settings" > "General" in your WordPress admin area. The `[current_year]` (alias `[annee]`) shortcode outputs a 4-digit year, and `[current_month_year]` (alias `[mois_annee]`) outputs the full month name and 4-digit year, localized by WordPress.

= Can I use these shortcodes in my theme files? =
Yes, you can use `<?php echo do_shortcode('[current_year]'); ?>` (or any other valid shortcode) in your theme's PHP files.

= Is it compatible with multilingual plugins (WPML, Polylang, etc.)? =
Yes, because it uses `wp_date()`, the date and time output will respect the language settings managed by most multilingual plugins for the frontend display.

= Where can I see the list of available shortcodes in my admin area? =
Once the plugin is activated, the available shortcodes (both primary English shortcodes and their French aliases) are listed directly below the plugin's description on your WordPress "Plugins" page for easy reference.

== Screenshots ==

1.  **Plugin admin view:** Shows the available shortcodes (English and French aliases) listed directly under the plugin description on the WordPress Plugins page.**

== Changelog ==

= 1.4 (May 31, 2025) =
* Initial public release for WordPress.org.
* Added primary shortcodes in English: `[current_year]`, `[current_month_year]`, `[current_date_time]`.
* Added French alias shortcodes: `[annee]`, `[mois_annee]`, `[date_heure_courante]`.
* Internationalized plugin with Text Domain 'simple-current-date-time'.
* Added French translation files.
* Plugin information (available shortcodes, support link) added to the plugins page.
* All code comments translated to English.

= 1.3 (Internal Version) =
* Base functionality with French shortcodes.
* Enabled shortcodes in titles and meta-titles.

== Upgrade Notice ==

= 1.4 =
This is the first version ready for WordPress.org. If you were using a previous internal version, this version standardizes shortcodes to English primaries with French aliases and adds full internationalization support.