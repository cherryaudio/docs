title: 'MIDI Continuous Controller Setup'
body:
  -
    type: text
    text: '<h1>MIDI CONTINUOUS CONTROLLER SETUP</h1><p>Voltage Modular really comes to life when hardware MIDI knob, slider, or pad controllers are assigned to controls. Learning controller assignments is fast and easy, so let’s delve in.</p><h3>Assigning An External Hardware Control</h3><p>In this example, we’ll assign a hardware slider control to a filter module’s cutoff frequency.</p>'
  -
    type: image
    image:
      - /assets/screenshots/ug_midilearn_rightclickcont.jpg
    alignment: left
  -
    type: text
    text: '<p>Start by right-clicking the <em>Cutoff</em>&nbsp;knob, and select <em>MIDI Learn</em>.</p>'
  -
    type: image
    image:
      - /assets/screenshots/ug_midilearn_rightclickcont.jpg
    alignment: left
  -
    type: text
    text: '<p>All of Voltage Modular’s controls turn purple, indicating that MIDI learn mode is enabled. Now move the hardware control you’d like to assign. You should see the cutoff knob move as the external knob or slider is moved, and assign mode will automatically be disabled. This is the basic procedure for assigning hardware controllers.</p>'
  -
    type: image
    image:
      - /assets/screenshots/ug_midilearn_modccnum.jpg
    alignment: left
  -
    type: text
    text: '<p>When assigning controllers, you’ll see numbers inside squares on the module controls. These indicate the MIDI continuous controller number of the assigned hardware control (these are also displayed in the <em>MIDI</em>&nbsp;library tab).</p><p>Once a MIDI CC controller has been assigned, in addition to real-time control of a Voltage Module parameter, you’ll also be able to record and play back controller data from a DAW.</p>'
  -
    type: buttons
    buttons:
      -
        type: button
        link_text: 'Continue to DAW Automation'
        url: /voltage-modular-user-guide/daw-automation
        target_blank: false
        color: btn-yellow
  -
    type: text
    text: '<p><br></p>'
template: documentation
seo:
  description: 'Voltage Modular really comes to life when hardware MIDI knob, slider, or pad controllers are assigned to controls.'
id: 9050429c-5ca6-4fe2-a7a9-78e70138c766
slug: midi-continuous-controller-setup
blueprint: documentation
