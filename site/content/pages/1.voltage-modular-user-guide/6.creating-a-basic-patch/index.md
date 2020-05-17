title: 'Creating A Basic Patch'
body:
  -
    type: text
    text: '<h1>CREATING A BASIC PATCH</h1><p>Phew, now that we have all that menu and settings stuff out of the way, let’s get to the part everyone’s been waiting for: creating wicked modular synth sounds with a mess o’ patch cables! Here we’ll walk through creating a basic two-oscillator subtractive synthesizer patch:</p><p>Cabinets operate in Voltage Modular much as they do in the hardware world, except that you’ll never need to worry about power routing or requirements, and that the size and number of cabinets is only limited by computer screen real estate (or how much you’re willing to scroll).</p>'
  -
    type: image
    image:
      - /assets/screenshots/ug_basiccabnocab.jpg
    alignment: left
  -
    type: text
    text: '<p>Upon launch, Voltage Modular will display an "empty" screen. To create an empty cabinet, right-click anywhere in the empty gray area and choose <em>Add Cabinet</em>, or add a module by dragging it to the gray area or clicking the module’s <em>Add</em>&nbsp;button.</p>'
  -
    type: image
    image:
      - /assets/screenshots/ug_basiccabempty.jpg
    alignment: left
  -
    type: text
    text: '<p>Here we’ve added an empty cabinet. Note that the cabinet’s edge and “back panel” appearance will change dependent upon the <em>Cabinet Theme</em>&nbsp;selected in <em>Settings Gear icon&gt;Interface&gt;Cabinet Theme</em>. In this screenshot we’ve chosen the roadworthy-yet-understated <em>Vinyl</em>&nbsp;theme.</p>'
  -
    type: image
    image:
      - /assets/screenshots/ug_basiccaboneosc.jpg
    alignment: left
  -
    type: text
    text: '<p>Here we’ve dragged in an Oscillator module. You could choose the <em>All</em>&nbsp;category and scroll to locate the Oscillator module, but it’s much faster to type the first few letters of the desired module in the <em>Search</em>&nbsp;text field. Here we’ve typed “osc” which filters the display to only show modules with “osc” in their name. Just like finding stuff on Netflix, only noisier.</p><p>To patch a cable, click on a jack, drag it to the desired destination jack, and release the mouse button.</p>'
  -
    type: image
    image:
      - /assets/screenshots/ug_basiccab_cabledrag.jpg
    alignment: left
  -
    type: text
    text: '<h3>Inputs vs. Outputs</h3><p><strong>An important concept to understand is that all jacks are exclusively an input or an output</strong>&nbsp;(unlike a hardware modular synth, where some jacks can be used as inputs <em>or</em>&nbsp;outputs). When a jack is clicked to patch a cable in Voltage Modular, jacks not available as destinations are grayed out. For example, if you’re patching a cable from an output jack, all other output jacks are temporarily grayed out. The same applies if you’re patching a cable from an input jack; all other input jacks are grayed out. Now back to our previously scheduled programming...</p><p>In the screenshot above, the <em>Pitch CV</em>&nbsp;output is being patched, causing all of the oscillator output jacks to become grayed out, while all of the oscillator inputs are potential destinations.</p>'
  -
    type: image
    image:
      - /assets/screenshots/ug_basiccab_oneosccable.jpg
    alignment: left
  -
    type: text
    text: '<p>Here we’ve added two cables for a super basic patch. The green cable routes the keyboard pitch control voltage out (we’ll refer to control voltages as "CVs" from here on out) to the oscillator’s keyboard CV in to allow keyboard control of pitch. The red cable routes the oscillator’s sawtooth wave output to the main audio outputs. You’ll notice that the sound plays continuously, but we’ll fix that soon.</p>'
  -
    type: image
    image:
      - /assets/screenshots/ug_basiccab_fullpatch1.jpg
    alignment: left
  -
    type: text
    text: '<p>Here we’ve fleshed out our basic patch with the addition of a Filter, and Amplifier, and two Envelope Generators (one to control the filter cutoff, and another to control amplitude).</p><p>Now that we’ve covered how to set up a basic patch, we’ll go over some (slightly) more advanced things you should know about cabinets, modules, and cables.</p>'
  -
    type: buttons
    buttons:
      -
        type: button
        link_text: 'Continue to Working With Cables and Jacks'
        url: /voltage-modular-user-guide/working-with-cables-and-jacks
        target_blank: false
        color: btn-yellow
  -
    type: text
    text: '<p><br></p>'
template: documentation
seo:
  description: 'Creating wicked modular synth sounds with a mess o’ patch cables! Here we’ll walk through creating a basic two-oscillator subtractive synthesizer patch.'
fieldset: documentation
id: b9cb490e-7a4d-4281-912b-c0f129477d05
