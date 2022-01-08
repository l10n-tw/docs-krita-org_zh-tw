f.. meta::
    :description:
        Releasing Krita

.. metadata-placeholder

    :authors: - Dmitry Kazakov <dimula73@gmail.com>
    :license: GNU free documentation license 1.3 or later.

.. _release_krita:

==========================
Making a release
==========================

.. contents::

Before the release
------------------

1. Coordinate with #kde-promo
2. Notify translators of string freeze!
3. Verify that the release notes page is done, like https://krita.org/en/krita-4-2-release-notes/
4. Verify that all dependency builds are up to date. Remember that these builds are built from **master**, not from the stable branch.

    * https://binary-factory.kde.org/job/Krita_Android_arm64-v8a_Dependency_Build/
    * https://binary-factory.kde.org/job/Krita_Android_armeabi-v7a_Dependency_Build/
    * https://binary-factory.kde.org/job/Krita_Android_x86_64_Dependency_Build/
    * https://binary-factory.kde.org/job/Krita_Android_x86_Dependency_Build/
    * https://binary-factory.kde.org/job/Krita_Nightly_Appimage_Dependency_Build/
    * https://binary-factory.kde.org/job/Krita_Nightly_MacOS_Dependency_Build/
    * https://binary-factory.kde.org/job/Krita_Nightly_Windows_Dependency_Build/
    
    Compare the build date and included commits to the commit in 3rdparty directory in master:
    
    .. code::
    
        git fetch origin && git log origin/master 3rdparty
    

Update version in source code
-----------------------------

1. !! REMOVE THE SURVEY LINK !! (or, if this is a beta, make a survey and update the survey link)
2. update the version of krita5.xmlgui
3. update the CMakeLists.txt version
4. update the snapcraft.yaml file
5. update the appstream screenshots: https://invent.kde.org/websites/product-screenshots
6. update org.kde.krita.appdata.xml 's release tag in the BRANCH
7. update download_release_artifacts.sh
8. update Android version (keep in mind that *all* Krita releases on Android are marked as Beta at the moment): packaging/android/apk/build.gradle
9. When releasing beta-version double-check that you updated to "beta1", not just plain "beta". Only "alpha" versions can be made without a number, because they are built nightly.

Update versions in the stable branch to avoid XMLGUI conflicts
--------------------------------------------------------------
1. stable branch is always marked as "alpha" (without a number in the end)
2. update the version of krita.xmlgui; it should be `$(( $VERSION_IN_RELEASE_BRANCH + 1 ))`
3. update the CMakeLists.txt version
4. update org.kde.krita.appdata.xml 's release tag
5. packaging/android/apk/AndroidManifest.xml 

Create the tarball
------------------

Create and push the tag
~~~~~~~~~~~~~~~~~~~~~~~

1. Set the tag: 

    .. code::
    
        git tag -a v5.1.0-beta1 -m "Krita 5.1.0 Beta1"

2. Push the tag: 

    .. code::
    
        git push origin refs/tags/v5.1.0-beta1:refs/tags/v5.1.0-beta1

3. If you need to change the tag position (not recommended):

    .. code::

        # remove the previous tag

        git push origin :refs/tags/v5.1.0-beta1

        # make a new tag locally
        git tag -a v5.1.0-beta1 -m "Krita 5.1.0 Beta1"

        # push the new tag
        git push origin refs/tags/v5.1.0-beta1:refs/tags/v5.1.0-beta1

        # all Krita developers now have to refetch tags to 
        # get the updated tag position
        git fetch origin --tags

Create the tarball
~~~~~~~~~~~~~~~~~~

1. Get the tarball from gitlab: https://invent.kde.org/graphics/krita/-/tags
2. Unpack the tarball
3. Run build-tools/copy_po.py in the unpacked folder
4. Package the tarball as .gz and .xz

4. Sign both tarballs:

    .. code::

        gpg --output krita-5.1.0-beta1.tar.gz.sig --detach-sign krita-5.1.0-beta1.tar.gz
        gpg --output krita-5.1.0-beta1.tar.xz.sig --detach-sign krita-5.1.0-beta1.tar.xz

5. Upload the gz tarball to files.kde.org, where builders can pick them up (the sigs and the xz tarball aren't used for the binary builders):

    * https://files.kde.org/krita/.release/$version/krita-$version.tar.gz


Make Windows, Linux, macOS and Android packages
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

8. Request four release builds on binary-factory.kde.org, after starting each build,go to "Console Output" section, click on "Input Requested" and choose a tarball version to build.

    * https://binary-factory.kde.org/job/Krita_Release_Windows64_Build/
    * https://binary-factory.kde.org/job/Krita_Release_Appimage_Build/
    * https://binary-factory.kde.org/job/Krita_Release_MacOS_Build/
    * https://binary-factory.kde.org/job/Krita_Release_Android_arm64-v8a_Build/
    * https://binary-factory.kde.org/job/Krita_Release_Android_armeabi-v7a_Build/
    * https://binary-factory.kde.org/job/Krita_Release_Android_x86_64_Build/
    * https://binary-factory.kde.org/job/Krita_Release_Android_x86_Build/

Runs

    * https://binary-factory.kde.org/job/Krita_Release_Android_AppBundle_Build/ (after the android builds are done)

9. Download all built artifacts using `download_release_artifacts.sh` script. Open the script and modify `KRITA_VERSION` variable to correspond to the version string.

10. For each build check:

    * Krita starts
    * Localization works
    * Python plugins are available
    * Basic painting and most recently fixed bugs are fixed

11. Sign the AppImage:

    .. code::

        gpg --detach-sign --output krita-5.1.0-beta-x86_64.appimage.sig krita-5.1.0-beta-x86_64.appimage


12. Sign four Android packages (or send them to Halla for signing)

    Note: there is a useful script for signing them...

    * krita-arm64-5.1.0-beta1-unsigned.apk
    * krita-arm32-5.1.0-beta1-unsigned.apk
    * krita-x86-5.1.0-beta1-unsigned.apk
    * krita-x86_64-5.1.0-beta1-unsigned.apk

    After signing, remove "-unsigned" suffix, so the signed packages would look like that:

    * krita-arm64-5.1.0-beta1.apk
    * krita-arm32-5.1.0-beta1.apk
    * krita-x86-5.1.0-beta1.apk
    * krita-x86_64-5.1.0-beta1.apk

13. Now you should have 18 files in your release folder

14. Generate an md5sum.txt file for all of them:

    .. code::

        md5sum ./* > md5sum.txt

15. Upload all files to download.kde.org (or ask sysadmins to do that using this manual ftp://upload.kde.org/README):

Note that the msix file is only for uploading to the Windows Store, it doesn't need to be uploaded to download.kde.org.

    - to https://download.kde.org/unstable/krita/5.1.0-beta1/
        * krita-5.1.0-beta1.tar.gz
        * krita-5.1.0-beta1.tar.gz.sig
        * krita-5.1.0-beta1.tar.xz
        * krita-5.1.0-beta1.tar.xz.sig
        * krita-5.1.0-beta1-x86_64.appimage
        * krita-5.1.0-beta1-x86_64.appimage.sig
        * krita-x64-5.1.0-beta1-dbg.zip
        * krita-x64-5.1.0-beta1-setup.exe
        * krita-x64-5.1.0-beta1.zip
        * krita-x86-5.1.0-beta1-dbg.zip
        * krita-x86-5.1.0-beta1-setup.exe
        * krita-x86-5.1.0-beta1.zip
        * krita-5.1.0-beta1.dmg
        * krita-arm64-5.1.0-beta1.apk
        * krita-arm32-5.1.0-beta1.apk
        * krita-x86-5.1.0-beta1.apk
        * krita-x86_64-5.1.0-beta1.apk
        * md5sum.txt
    - to https://download.kde.org/unstable/krita/updates/
        * Krita-Beta-x86_64.appimage.zsync
        
    Please don't forget to replace "unstable" to "stable" for stable release builds. 
    It should be replaced for both, packages themselves and zsync file


16. Template ticket for sysadmins:

    .. code::

        Hi, sysadmins!

        Could you please do the final steps for publishing Krita release?

        There are two tasks:

        1) Upload release artifacts (20 files) to download.kde.org:

            * Source link: https://files.kde.org/krita/release-5.1.0-beta1/
            * Destination link: https://download.kde.org/unstable/krita/5.1.0-beta1/
            
        2) Upload updates ZSync artifacts (1 file) to download.kde.org:
            * Source link: https://files.kde.org/krita/release-5.1.0-beta1-updates/
            * Destination link: https://download.kde.org/unstable/krita/updates/
                         
        3) Add `Krita 5.1.0 Beta1` bugzilla version

17. Now the folder on download.kde.org should have 21(!) files. Check if you missed something (and you surely did! :) ).

    
Release coordination
~~~~~~~~~~~~~~~~~~~~

1. Mail KDE release coordination <release-team@kde.org>
2. Send release notes for future Krita versions to news@publisher.ch
3. Create bugzilla version: https://bugs.kde.org/editversions.cgi?product=krita Or file a sysadmin ticket for that. 
4. [only for a major release] Warn kde sysadmins that we're going to release and that krita.org is going to take load. Just file a ticket on phabricator.

PR and Communications
---------------------

Pre-release
~~~~~~~~~~~

1. Update Kiki page
2. Update press pack and page
3. Verify if manual pages are updated, if not annoy @woltherav and add undocumented features to Krita: Manual
4. Notify people that they can start making release demonstrations.

Release
~~~~~~~

1. Update download page
2. Publish the announcement and release notes
3. Add release links to Release History section of the site: https://krita.org/en/about/krita-releases-overview/ 
4. Add the release to the org.krita.org.appdata.xml file in MASTER.

Post-release
~~~~~~~~~~~~

* tumblr (wolthera)
* BlenderArtists (wolthera)
* deviantart (wolthera)
* VK (dmitry)
* blendernation (boud)
* twitter (boud)
* facebook (boud)
* 3dpro (boud)
* reddit (raghukamath)

Notes
=====

Additional info can be found here:
https://phabricator.kde.org/T10762
