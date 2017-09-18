# Interpretation-of-non-escaped-hashtag-in-URL-for-use-in-PHP
I made this workaround for utilization of hashtag characters in PHP, so that Triskel could fix his irc.lc website, and allow linking to channels which have hashtags in the channel name, such as for unofficial channels on Freenode which begin with "##".

The issue arises because browsers interpret non escaped octothorpes in the URI as the indicator of a URI fragment, and the fragments are not transmitted to the server. Thus, fragments are only useful for the client-side since it's inaccessible on the server-side and will function to essentially comment out everything in the URI after it.

The workaround implemented here is to detect when there is a URI fragment available to the client-side, to rebuild the URL with escaped characters, and to redirect the location to the escaped URL.