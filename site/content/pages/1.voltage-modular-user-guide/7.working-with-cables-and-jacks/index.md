title: 'Working With Cables and Jacks'
body:
  -
    type: text
    text: '<h1>WORKING WITH CABLES AND JACKS</h1>'
  -
    type: image
    image:
      - /assets/screenshots/ug_basiccab_cabledrag.jpg
    alignment: left
  -
    type: text
    text: '<h3>Patching Cables</h3><p>Patching a cable is simple- click on a jack, drag it to the desired destination jack and release the mouse button, <strong>but there’s one very important thing to be aware of:</strong></p><p>Unlike a hardware modular synth, where some jacks can be used as inputs <em>or</em>&nbsp;outputs, <strong>all Voltage Modular jacks are exclusively an input or an output.</strong>&nbsp;To help clarify this, when a jack is clicked and held to patch a cable, jacks <em>not</em>&nbsp;available as destinations are grayed out. For example, if you’re patching a cable from an output jack, all other <em>output</em>&nbsp;jacks are temporarily grayed out. The same applies if you’re patching a cable from an input jack- all other <em>input</em>&nbsp;jacks are grayed out.</p><p>In the screenshot above, the <em>Pitch CV</em>&nbsp;output is being patched, causing all of the oscillator output jacks to become grayed out, while all of the oscillator inputs are potential destinations.</p><h3>Disconnecting Cables</h3><p>Cables can be disconnected by grabbing one end of a jack and dragging it to any area that isn’t a jack, or by right-clicking on a jack and selecting <em>Disconnect Cables</em>.</p><h3>The Built-In Six-Way Mult (Hiding Beneath Every Jack)</h3>'
  -
    type: image
    image:
      - /assets/screenshots/ug_basiccab_multjack.jpg
    alignment: left
  -
    type: text
    text: '<p>If you look closely at the I/O Panel <em>Gate</em>&nbsp;CV out, you can see we’ve routed two cables from this jack to control both envelope generators. Single-clicking on any Voltage Modular input or output jack reveals a six-way multiple jack (aka, a "mult"), which is super convenient for routing (or mixing) multiple sources. The mult will stay visible until a cable is routed, at which point it disappears. If you need more than six jacks for any connection, you can always use a dedicated Multiple module (or link together as many Multiple modules as you like), but using the built-in six-way mults will save a whole lot of patching hassle.</p><h3>Choosing Cable Colors</h3>'
  -
    type: image
    image:
      - /assets/screenshots/ug_cablecolorselect.jpg
    alignment: left
  -
    type: text
    text: |
      <p>There are a couple of ways to select cable colors. The most obvious way is to click the colored dot in the top menu bar to reveal the color picker palette and select a global color. By "global," this means all newly patched cables will be the chosen color (or a random color, if <em>Random</em>&nbsp;is selected). Existing cables are not affected.</p><p>To change the color of an existing patched cable, right-click on one of the jacks it’s connected to, then click a new color. This changes <em>only</em>&nbsp;that cable, and won’t affect the global cable color in the top menu bar.</p><ul><li><strong>Super Handy "Pre-Patching" Cable Color Selection</strong>- Right-clicking a jack that doesn’t have a cable plugged in opens the color palette and changes the global color; the same as clicking the color selector in the top menu bar. This is convenient for specifying a cable color right before patching a new cable.<br></li></ul><h3>Rapidly Routing A Cable To Multiple Destinations</h3><p>This one’s not so obvious, but it’s really handy. To patch cables from a single jack to multiple destinations, press and 
      hold the [SHIFT] key, click the source jack, then click up to six 
      destination jacks as desired and release the [SHIFT] key when you’re 
      done. This works with input or output jacks, and is particularly useful 
      for patching pitch and gate CV’s from the I/O panel to multiple 
      oscillators or envelope generators.</p><h3>Virtual MIDI Cables</h3>
  -
    type: image
    image:
      - /assets/screenshots/ug_cables_midi.jpg
    alignment: left
  -
    type: text
    text: '<p>Voltage Modular’s virtual MIDI cables behave much like standard cables, but instead of carrying a single audio or control voltage signal, they carry all the same note and control as a traditional MIDI cable. This lets Voltage Modular transmit and receive polyphonic note and controller data, and in conjunction with the Poly Oscillator and other poly-oriented modules, greatly simplifies creating polyphonic patches.</p><p>You’ll notice that virtual MIDI cables are a bit fatter than standard cables; this is done to make them easy to recognize on-screen (and to fit all that extra data). Virtual MIDI jacks also contain the previously discussed built-in six-way mult, and if that’s not enough, there’s a MIDI Multiple module as well. There are also MIDI input, output, drum trigger modules and more for transmitting and receiving MIDI data with external instruments and other useful functions.</p>'
  -
    type: buttons
    buttons:
      -
        type: button
        link_text: 'Continue to Working With Cabinets'
        url: /voltage-modular-user-guide/working-with-cabinets
        target_blank: false
        color: btn-yellow
  -
    type: text
    text: '<p><br></p>'
template: documentation
seo:
  description: 'Patching a cable is simple- click on a jack, drag it to the desired destination jack and release the mouse button.'
fieldset: documentation
id: f847029d-b77a-4901-8f9a-54ad2fa1a1b4
