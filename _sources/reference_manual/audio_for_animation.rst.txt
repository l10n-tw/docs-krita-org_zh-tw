.. meta::
   :description:
        The audio playback with animation in Krita.

.. metadata-placeholder

   :authors: - Wolthera van Hövell tot Westerflier <griffinvalley@gmail.com>
             - Scott Petrovic
             - Marcidy
             - Emmet O'Neill <emmetoneill.pdx@gmail.com>
   :license: GNU free documentation license 1.3 or later.

.. index:: Animation, Audio, Sound, Timeline
.. _audio_animation:

===================
Audio for Animation
===================

Within Krita you can load an audio file into your document to help syncronize your animation with dialogue or music. This functionality is available from the audio menu in the Timeline Docker's titlebar.

Importing Audio Files
---------------------

Krita supports a variety of audio file types, including WAV, FLAC, OGG, MP3, and more. 

To load an audio file into your Krita document, first open the Timeline Docker.

On the right-hand side of the Timeline Docker's toolbar, you'll find the Audio Menu button with an icon that looks like a speaker.
This is the main area where you will interact with Krita's audio system, including loading and removing audio tracks and adjusting the playback volume.

Specifically, these options and widgets are available in the Audio Menu:

* Load Audio File
* Remove Audio File
* Mute Audio
* Audio Volume Slider

Crucially, Krita only saves the location (file path) of your audio file inside your Krita document. Because of that, if you happen to move or rename an audio file that you've referenced in one of your Krita animations, Krita will no longer be able to find it and you will need to re-load it manually. However, Krita will tell you the file was moved or deleted the next time you try to open the Krita file up.

Using Audio
-----------

Once you've imported some audio, you will be able scrub through frames on the timeline and Krita will play the audio chunk associated with the frame that you want on. Then, when you press the Play button, your audio will playback while you animation plays synchronized with the image frame changes. 

As of now there is no visual audio waveform display in Krita's UI, so you will need to use your ears and the scrubbing functionality to line your keyframes up with specific parts of the audio.


Exporting with Audio
--------------------

To have audio included with you exported animation video you will need to check enable it in the Render Animation options. In the :menuselection:`File --> Render Animation` options there is a checkbox :guilabel:`Include Audio`. Make sure that is checked before you export and you should be good to go.
