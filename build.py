# OSU SPS Website Build Script

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

header = loadFile( includes_folder + "header.html", "" )
header = header.replace( "[STYLE]", loadFile( includes_folder + "style.css", "\t" ) )
header = header.replace( "[SCRIPT]", loadFile( includes_folder + "script.js", "\t" ) )

footer = loadFile( includes_folder + "footer.html", "" )

names = [
    "index.html"
]

for name in names:
    raw = loadFile( src_folder + name, "" )
    raw = header + raw + footer
    outputFile( out_folder + name, raw )
