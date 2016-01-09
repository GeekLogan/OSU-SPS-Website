# OSU SPS Website Build Script

import os

def loadFile( src, prefx ):
    out = ""
    for line in open( src, 'r' ):
        out += prefx + line
    return out

def outputFile( name, content ):
    file = open( name, 'w' )
    file.write( content )
    file.close()
    
out_folder = "output/"
src_folder = "src/"
includes_folder = src_folder + "includes/"

names = set()
for name in os.listdir( src_folder ):
    names.add( name )
    
names.remove( includes_folder[ len( src_folder ) : -1 ] )

for name in names:
    raw = loadFile( src_folder + name, "" )
    raw = raw.replace( "[STYLE]", loadFile( includes_folder + "style.css", "\t" ) )
    outputFile( out_folder + name, raw )
