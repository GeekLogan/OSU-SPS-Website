import os
import xml.etree.ElementTree as ET

def buildPage( name, folder ):
    command = "php "
    command += "src/"
    command += name
    command += ".php >> "
    command += folder
    command += "/"
    command += name
    command += ".html"
    return os.system(command);

indexFile = "src/pages.xml"
outputFolder = "output"
version = "0.2"

spacer = ""
for i in range(80):
    print " "
    spacer += "-"

loadingText = [
    " ",
    spacer,
    " ",
    "Loading Logan's PHP HTML Precompiler...",
    "Script Version: " + version,
    "Loading Index From: " + indexFile,
    "Output HTML will be in: " + outputFolder,
    " ",
    spacer,
    " ",
    "Cleaning output folder...",
    "\t(If an error occurs on this line, there may be nothing in output folder)"
]

for line in loadingText:
    print line

status = os.system("rm -R " + outputFolder + "/*")
print "\t Status: " + `status`
print ""

print "Loading XML Document..."
print " "
tree = ET.parse(indexFile)
root = tree.getroot()
print "Files from XML: "
for child in root:
    out = "\t"
    out += child.text
    out += ".php"
    print out
print " "

statusTotal = 0

i = 1
for child in root:
    pageName = child.text
    print "Page #" + `i` + ": "
    print "\tBuilding " + pageName + ".php..."
    status = buildPage(pageName, outputFolder)
    statusTotal += status
    print "\tStatus: " + `status`
    print "\t" + pageName + ".html has been built in " + outputFolder + '!'
    print " "
    i += 1

print spacer
print " "

if(statusTotal != 0):
    print "An error may have occurred!"
    print "Status code: " + `statusTotal`
else:
    print "All pages successfully compiled!"

print " "
print spacer
print " "

print "Executing Run-After Script..."
execfile("build-after.py")

print " "
print spacer
print " "
