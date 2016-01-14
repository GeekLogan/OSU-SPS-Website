#Printing to Department of Physics Printers from Personal Devices

##Printers

| Name | Model | Features |
|------|-------|----------|
| smith1011s (LOUNGE PRINTER) | HP LaserJet 4250 | duplex |
| prbx002 | HP LaserJet 4700 | color, duplex |
| prbx019 | HP LaserJet 4700 | color, duplex |
| prb1040a | Xerox WorkCentre 7845 | color, duplex, scanning |
| prb1199 | HP LaserJet 4345mfp | duplex, scanning |
| prb2020 | HP LaserJet 4250 | duplex |
| prb2050 | HP LaserJet 4700 | color, duplex |
| prbm2020 | HP LaserJet 4700 | color, duplex |
| prbm2050 | HP LaserJet m602dn | duplex |
| prb3015 | HP LaserJet 4050 | duplex |
| prbx301 | Xerox WorkCentre 7845 | color, duplex, scanning |
| prbx423 | HP LaserJet 4000 | duplex |
| smith2097 | HP LaserJet 4700 | color, duplex |

Modified from (Here)[http://www.physics.ohio-state.edu/TWiki/bin/view/PhysicsComputingHelp/UnixPrinters].

##Mac OS X Configuration

To configure an Apple Mac to use a printer in the OSU Physics department, follow these steps:

1. Bring up the System Preferences tool.
2. Choose Print and Scan.
3. Click on the plus sign to add a printer.
4. Choose the IP tab (as opposed to Default, Fax or Windows).
5. Put an address of <code>lpd.physics.ohio-state.edu</code>.
6. Put a queue of <code>printers/NAME</code> (use appropriate printer name from table above).
7. Change the name to a good name to remember the printer by (ex: "Physics Lounge").
8. Enter the printer's location (ex: "Smith 1011").
9. Choose the appropriate printer driver (The lounge printer will work with "Default PostScript Printer").
10. Add the printer.
11. If an error complains that it can't verify the printer, click continue.
12. Select the printer when printing.

Modified from (Here)[https://lapserv.maths.cam.ac.uk/docs/osxprint108.html].

##Windows Configuration

1. Go To "Programs and Features" in the Control Panel.
2. Select "Turn Windows features on or off" on the left-hand side.
3. In the resulting window, select "LPR Port Monitor" in the "Print and Document Services" folder.
4. Apply the settings and close the windows.
5. Open "Devices and Printers" in the Control Panel.
6. Select "Add a printer" at the top of the page.
7. Press "Add a local printer" in the resulting window.
8. Select the "Create a new port" radio button and select "LPR Port" from the "Type of port" dropdown.
9. For "Name of address of server providing lpd" enter <code>lpd.physics.ohio-state.edu</code>.
10. For "Name of printer or print queue on that server" enter the name of the printer from the above table and click ok.
11. Choose the printer model in the driver selector screen; if there is not an exact match, it is acceptable to enter a close match to the model number (i.e. Cannon 2000 instead of Cannon 2001).
12. Click "ok" and then "Do not share this printer" and "ok" again.
13. Click finish to close the printer-adding menu. 
14. Select the printer when printing.

Modified from (here)[http://campus.mst.edu/cis/desktop/documentation/pc/win7_x64/lpr_printer/install.htm].

##Linux Configuration

Because every distribution of Linux is different, below are a general
set of steps to follow, but the details will need to be provided by the
vendor of the distribution:

1. Ensure that CUPS is installed and configured as the system printing sublayer.
2. Add <code>ServerName lpd.physics.ohio-state.edu</code> to the end of <code>/etc/cups/client.conf</code>
3. Reload CUPS and all printers will be available.

Modified from (Here)[http://www.physics.ohio-state.edu/TWiki/bin/view/PhysicsComputingHelp/UnixPrinters].

##References

- http://www.physics.ohio-state.edu/TWiki/bin/view/PhysicsComputingHelp/UnixPrinters
- https://www.freebsd.org/doc/en/articles/cups/printing-cups-clients.html 
- https://lapserv.maths.cam.ac.uk/docs/osxprint108.html