title: 'MIDI Trigger 3'
body:
  -
    type: text
    text: '<h1>MIDI TRIGGER 3</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_midi-trigger-3.jpg
    alignment: left
  -
    type: text
    text: '<p>The MIDI Trigger 3 module converts MIDI notes C3, D3, and E3 to trigger outputs for basic drum module setups. If you want a quick and simple way to convert three MIDI notes to trigger outputs this it! If three notes isn’t enough, or you want to use different MIDI notes, check out the <a href="https://docs.cherryaudio.com/cherry-audio/modules/midi-drum-trigger" target="_blank">MIDI Drum Trigger</a> module.</p><h2>Inputs and Outputs</h2><p><strong>MIDI In jack</strong>- Input jack for receiving MIDI notes from an external controller or MIDI device. This is typically patched to the&nbsp;<em>From Host</em>&nbsp;MIDI jack in the I/O panel or the&nbsp;<em>MIDI Out</em>&nbsp;jack of a MIDI Input module. Remember that this module ONLY responds to MIDI notes C3, D3, and E3.</p><p><strong>Trig Out jacks</strong>- Outputs a 5V pulse, or trigger, each time its respective MIDI note is received at the <em>MIDI In</em> jack. These will typically be used to trigger drum modules via their <em>Trig In</em> jacks but can also be used to trigger “one-shot” samples, envelopes or LFOs.</p>'
template: documentation
seo:
  description: 'The MIDI Trigger 3 module converts MIDI notes C3, D3, and E3 to trigger outputs for basic drum module setups.'
  image: /assets/social-modules/midi-trigger-3.png
id: ecad71f3-e12b-44f2-a0e6-b7dd660c51b2
slug: midi-trigger-3
blueprint: documentation
