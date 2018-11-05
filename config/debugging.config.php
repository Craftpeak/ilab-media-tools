<?php
// Copyright (c) 2016 Interfacelab LLC. All rights reserved.
//
// Released under the GPLv3 license
// http://www.gnu.org/licenses/gpl-3.0.html
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
// **********************************************************************

if (!defined('ABSPATH')) { header('Location: /'); die; }

return [
    "name" => "Media Cloud Debugging",
	"title" => "Media Cloud Debugging",
	"description" => "Enables logging for the plugin to track down issues.",
	"class" => "ILAB\\MediaCloud\\Tools\\Debugging\\DebuggingTool",
	"dependencies" => [],
	"env" => "ILAB_MEDIA_DEBUGGING_ENABLED",
	"settings" => [
		"title" => "Debug Settings",
		"menu" => "Debug Settings",
		"only_when_enabled" => true,
		"options-page" => "media-tools-debugging",
		"options-group" => "ilab-media-debugging",
		"groups" => [
			"ilab-media-s3-debug-settings" => [
				"title" => "Debug Settings",
				"description" => "If you are having issues with ILAB Media Cloud, you can turn on logging to possibly help track down issues.",
				"options" => [
					"ilab-media-s3-debug-logging-level" => [
						"title" => "Logging Level",
						"description" => "The logging level to use. To disable logging for Media Cloud, set it to <code>None</code>.",
						"type" => "select",
						"default" => "none",
						"options" => [
							"none" => "None",
							"info" => "Info",
							"warning" => "Warning",
							"error" => "Error"
						]
					],
					"ilab-media-s3-debug-papertrail-endpoint" => [
						"title" => "Papertrail Endpoint",
						"description" => "If you are troubleshooting an issue with the developer of this plugin, he will likely give you the endpoint and port for remote logging.  Enter the endpoint here.",
						"type" => "text-field"
					],
					"ilab-media-s3-debug-papertrail-port" => [
						"title" => "Papertrail Port",
						"description" => "If you are troubleshooting an issue with the developer of this plugin, he will likely give you the endpoint and port for remote logging.  Enter the port here.",
						"type" => "text-field"
					],
					"ilab-media-s3-debug-papertrail-user-id" => [
						"title" => "Papertrail User Id",
						"description" => "If you are troubleshooting an issue with the developer of this plugin, he will likely give you the endpoint and port for remote logging.  Enter your email here to help filter the logs.",
						"type" => "text-field"
					]
				]
			]
		]
	]
];