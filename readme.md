#Omaha Film Festival#

Paul and Andrew update the [Omaha Film Festival](http://www.omahafilmfestival.org/) website to be in Wordpress.

##Home Page#
Welcome message & Description, announcements, Events (sidebar), Navigation (Top and Side), sponsors footer, header

Currently no meaningful difference exists between topbar and sidebar, but we are thinking that the topbar could be for organization-wide things / pages that are true every year, whereas the sidebar could be information for the current year's festival.

###Events Sidebar#
Upcoming and past events + header)

###TopNav#
Home, Films, Tickets, Call for Entries, Sponsors, Media, Archive, Contact

###SideNav#
Films, Screenplay finalists, conference, parties, buzz, festival passes

###Sponsor Footer#
A bunch of sponsor logos, each of which are linked to homepages of the relevant sponsors

##Films (link)#
Links to external schedule (last year's, in this case) -- Sched

##Tickets (link)#
Link to brownpapertickets.com

##Call for Entries :: page#
How to submit, plus link to (external) submission forms (filmfreeway, withoutabox)

Twitter sidebar instead of side nav, and the normal events sidebar

##Sponsors :: page#

Similar to the footer, but in the main box.

Twitter sidebar instead of side nav.

##Media :: link to posts by tag="media"#

Big list of content, mostly of media mentions, as well as some images and embedded youtube video

Twitter sidebar

##Archive :: link to posts by tag="awards"#

Big list of previous awards, organized by year. `<hr>` tags between each year. Goes back to 2006. 

Twitter sidebar instead of side nav

##Contact :: page#

Big list of contact info with links to relevant email addresses.

Twitter sidebar instead of side nav

##Films (SideNav) :: link#

Same as Films link on top nav

##Screenplay Finalists (SideNav) :: posts by tag="screenplay finalists"#

Very similar information to the most recent year of the archives, though with more description. Currently in chronological order (most recent at the end), which maybe could change.

Sidenav instead of twitter feed

##Schedule (SideNav) :: link#

Same as "Films" link in SideNav/TopNav

##Conference (SideNav) :: page / link#
Big list of events with times and places (this might be the actual schedule).

Includes "Writer's Theatre" and Conference Panel info, both of which open to external links (Sched)

##Parties (SideNav)#
Schedule for parties, with similar format to Conference page.

Some party events have links to FB events, but not all.

##Buzz (SideNav)#

Not meaningfully different from "Media"

##Festival Passes (SideNav)#

Description of buying a pass, plus a link to brownpapertickets

##For Filmmakers (SideNav)#

No actual content here

#Phase 1#

**Categories for Posts:**

+ [x] Finished initial category hierarchy

**Top Nav:**

+ [ ] Home (static content + most recent posts)
+ [ ] Films (page containing listings of films by year, with links if appropriate)
+ [ ] Call for Entries (page)
+ [ ] Sponsors (page)
+ [ ] Buzz (posts by category)
+ [X] Past Winners (posts by category)
+ [x] Contact (Form)
+ [x] About (Page)
    + [x] Press Kit (page)
    + [x] Staff (page)

**Side Nav:**

+ [ ] Showtimes (link to external site)
+ [ ] Upcoming Events (link to external site)
+ [ ] Conference (page)
+ [ ] Past Events (page)
+ [ ] Screenplay Finalists (page)
+ [ ] Festival Passes (page w/ link)

**Main Content Display**

+ [ ] Some static content + most recent posts

**Events**

+ [ ] Upcoming Events

#Setting up Wordpress Locally#

In order to set up a local copy of a Flywheel-hosted wordpress site, we must do several things:

1. Download MAMP and install the application wherever makes us happiest
2. Download the official wordpress install from wordpress.org
3. Create a project directory for your Wordpress project, then copy the entirety of the install-folder contents into this project.
4. Point MAMP toward the directory containing your project directory (this will let you work on multiple wordpress sites at once if you feel so inclined)
5. On your Flywheel site, export the database as SQL, making sure to ignore the `options` table; this table will only make you suffer. Make sure to save the database where you can easily find it.
6. Using MAMP, click on "Open Start Page"; this will take you to your admin panel. From there, search for the PHPAdmin page. This is where you will need to be
7. Create a database with a name that is relevant to your project. Leave it blank
8. Go to `localhost:8888` and select the folder where you placed the Wordpress install files
9. Now you will have to install Wordpress. When prompted for the database, make sure that name matches the name of the project database you created in PHPAdmin. When prompted for the database prefix, make sure that it matches the database prefix you see in Flywheel's admin page.
10. Let the install run.
11. Open up Sequel Pro (this should come with MAMP); connect to the database with a `socket` connection (the username and password should both be `root`), then select your database from the pulldown menu at the top-left.
12. Import (using the `file` menu) your database from Flywheel into the database you have open. You can probably ignore most, if not all, errors.
13. This will probably time out your local wordpress session, which is okay. Re-log-in using your credentials, then check to see if the posts and pages all exist as expected.
14. Now you are ready to create a theme folder. In `wp-content/themes`, create a new folder for your theme, then initialize a Git repository inside that folder. This will mean that your Git repository only contains theme-specific files, instead of containing the entire Wordpress install. Thus, when Wordpress updates (or when someone else chooses to work on your theme on their own install), it probably won't create merge conflicts, etc.

#Events Calendar#

We've provided, in wordpress, a sidebar named "events" -- you can stick your events calendar into this sidebar. Here's how it works:

1. Install the "Google Calendar Events" plugin (Phil Derksen) on the plugins page.
2. Create a google calendar devoted to OFF events -- it doesn't particularly matter what you call it, but make sure the calendar is publicly available.
3. Under the "Share this calendar" menu, grab the XML link, then add it in the specified place.
4. From here, we can go to the "Widgets" menu (under "Appearance") in the Wordpress admin panel. Grab the Google Calendar Events widget and drag it right into the sidebar. You can play with the settings there, but it should be fine for now. The biggest change is to modify the layout from "grid" view to "list" view.
5. Everything should work now.