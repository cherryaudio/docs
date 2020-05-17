title: 'MIDI Channel Filter'
body:
  -
    type: text
    text: '<h1>MIDI CHANNEL FILTER</h1>'
  -
    type: image
    image:
      - /assets/modules/ug_midi-channel-filter.jpg
    alignment: left
  -
    type: text
    text: '<p>The MIDI Channel Filter module allows easy selective filtering of any combination of channelized MIDI data and includes "All On" and "All Off" buttons to quickly enable or disable all MIDI channels. This module can be used in various ways including muting/unmuting MIDI channels on the fly, splitting data to multiple MIDI destinations, or rerouting MIDI channels. You could, for example, use the MIDI Channel Filter to isolate a single channel of MIDI from a signal and reroute its data to a different channel and/or destination using a MIDI Output module.</p><h2><strong>Inputs, Outputs, and Controls</strong></h2><p><strong>MIDI In jack</strong>- Patch MIDI signals here to selectively filter which channels are passed to the output jack. The small LED lights red when MIDI is being received.</p><p><strong>Active Channels (1-16)</strong>- Click on these buttons to select which MIDI channels are passed to the output jack. Channels are active when their corresponding button is lit green. MIDI data received on active channels will be passed to the output while data received on unselected channels will be filtered out.</p><p><strong>All Chnls (Off/On)</strong>- These <em>Off</em> and <em>On</em> buttons can be used to quickly select or deselect all 16 MIDI channels with a single click.</p><p><strong>Midi Out jack</strong>- Outputs all MIDI data received on active channels. The small LED lights red when MIDI is being output.</p>'
template: documentation
seo:
  description: 'The MIDI Channel Filter module allows easy selective filtering of any combination of channelized MIDI data and includes "All On" and "All Off" buttons to quickly enable or disable all MIDI channels.'
id: 03cf8452-e0c0-4d3c-81df-719b1c32078b
slug: midi-channel-filter
blueprint: documentation
