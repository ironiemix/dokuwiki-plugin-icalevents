<?php
# Default configuration for iCalEvent Dokuwiki Plugin

# Date format that is used to display the from and to values
# If you leave this empty '', then the default dformat from /conf/dokuwiki.php will be used.
$conf['dayformat'] = "%d.%m.%y";
$conf['timeformat'] = "%H:%M";

# locale definition fpr setlocale
$conf['locale'] = 'en_EN';

# should the end dates for each event be shown?
$conf['showEndDates'] = 0;

# do you wnat the description parsed as an acronym?
$conf['list_desc_as_acronym']   = false;

# do you want one table per month instead of a huge eventsstable?
$conf['list_split_months']      = false;
$conf['hour_offset']      = 0;
$conf['event_to_next_day'] = false;

