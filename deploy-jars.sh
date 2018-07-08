#!/bin/sh
# Copy the latest LanguageTool JARs to Tomcat for community.languagetool.org
# Run this after a new snapshot has been created - root needs to restart Tomcat then.
# dnaber, 2014-03-04

DATE=`date +%Y%m%d`

if [ $# = 1 ]; then
  DATE=$1
fi

SNAPSHOT_FILE=LanguageTool-$DATE-snapshot.zip
SNAPSHOT_URL=https://languagetool.org/download/snapshots/$SNAPSHOT_FILE
WIKI_SNAPSHOT_FILE=LanguageTool-wikipedia-$DATE-snapshot.zip
WIKI_SNAPSHOT_URL=https://languagetool.org/download/snapshots/$WIKI_SNAPSHOT_FILE
WEB_LIB=/home/languagetool/tomcat/webapps/ROOT/WEB-INF/lib

echo "Using date: $DATE"

cd /home/languagetool/languagetool.org/git-checkout
rm -r /tmp/lt-snapshot
rm -r /tmp/lt-wikipedia-snapshot

cd  /tmp
wget $SNAPSHOT_URL
wget $WIKI_SNAPSHOT_URL
if [ ! -f $SNAPSHOT_FILE ]; then
  echo "Error: $SNAPSHOT_FILE not found, stopping"
  exit
fi
cd -

echo "Going to unzip: $SNAPSHOT_FILE"
unzip -d /tmp/lt-snapshot /tmp/$SNAPSHOT_FILE
rm /tmp/$SNAPSHOT_FILE

# backup of libs:
rm -r /home/languagetool/tomcat/lib-bak/
mkdir /home/languagetool/tomcat/lib-bak/
cp -r $WEB_LIB /home/languagetool/tomcat/lib-bak/

cp /tmp/lt-snapshot/LanguageTool-*-SNAPSHOT/libs/languagetool-core.jar $WEB_LIB
cp /tmp/lt-snapshot/LanguageTool-*-SNAPSHOT/libs/languagetool-core-tests.jar $WEB_LIB

cd /tmp/lt-snapshot/LanguageTool-*-SNAPSHOT/
rm /tmp/lt-not-in-jars.jar
zip -r /tmp/lt-not-in-jars.jar org/
cp /tmp/lt-not-in-jars.jar $WEB_LIB
# get rid of language-it-2.5-SNAPSHOT.jar etc to avoid duplication:
rm $WEB_LIB/language-all-*-SNAPSHOT.jar
rm $WEB_LIB/language-[a-z][a-z]-*-SNAPSHOT.jar
rm $WEB_LIB/language-[a-z][a-z][a-z]-*-SNAPSHOT.jar
rm $WEB_LIB/languagetool-core-*-SNAPSHOT.jar

mkdir -p /home/languagetool/tomcat/webapps/ROOT/WEB-INF/classes/META-INF/org/languagetool/
cp /tmp/lt-snapshot/LanguageTool-*-SNAPSHOT/META-INF/org/languagetool/language-module.properties /home/languagetool/tomcat/webapps/ROOT/WEB-INF/classes/META-INF/org/languagetool/

rm $WEB_LIB/languagetool-wikipedia-*-SNAPSHOT.jar
echo "Going to unzip: /tmp/$WIKI_SNAPSHOT_FILE"
unzip -d /tmp/lt-wikipedia-snapshot /tmp/$WIKI_SNAPSHOT_FILE
cp /tmp/lt-wikipedia-snapshot/LanguageTool-*-SNAPSHOT/languagetool-wikipedia.jar $WEB_LIB
rm /tmp/$WIKI_SNAPSHOT_FILE

# commented out as this now requires root permission:
#cd /home/languagetool
#./restart-tomcat.sh
