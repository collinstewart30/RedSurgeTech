<?php
namespace Aws\LicenseManager;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS License Manager** service.
 * @method \Aws\Result acceptGrant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acceptGrantAsync(array $args = [])
 * @method \Aws\Result checkInLicense(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkInLicenseAsync(array $args = [])
 * @method \Aws\Result checkoutBorrowLicense(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkoutBorrowLicenseAsync(array $args = [])
 * @method \Aws\Result checkoutLicense(array $args = [])
 * @method \GuzzleHttp\Promise\Promise checkoutLicenseAsync(array $args = [])
 * @method \Aws\Result createGrant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGrantAsync(array $args = [])
 * @method \Aws\Result createGrantVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createGrantVersionAsync(array $args = [])
 * @method \Aws\Result createLicense(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLicenseAsync(array $args = [])
 * @method \Aws\Result createLicenseConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLicenseConfigurationAsync(array $args = [])
 * @method \Aws\Result createLicenseManagerReportGenerator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLicenseManagerReportGeneratorAsync(array $args = [])
 * @method \Aws\Result createLicenseVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLicenseVersionAsync(array $args = [])
 * @method \Aws\Result createToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTokenAsync(array $args = [])
 * @method \Aws\Result deleteGrant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteGrantAsync(array $args = [])
 * @method \Aws\Result deleteLicense(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLicenseAsync(array $args = [])
 * @method \Aws\Result deleteLicenseConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLicenseConfigurationAsync(array $args = [])
 * @method \Aws\Result deleteLicenseManagerReportGenerator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLicenseManagerReportGeneratorAsync(array $args = [])
 * @method \Aws\Result deleteToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTokenAsync(array $args = [])
 * @method \Aws\Result extendLicenseConsumption(array $args = [])
 * @method \GuzzleHttp\Promise\Promise extendLicenseConsumptionAsync(array $args = [])
 * @method \Aws\Result getAccessToken(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getAccessTokenAsync(array $args = [])
 * @method \Aws\Result getGrant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getGrantAsync(array $args = [])
 * @method \Aws\Result getLicense(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLicenseAsync(array $args = [])
 * @method \Aws\Result getLicenseConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLicenseConfigurationAsync(array $args = [])
 * @method \Aws\Result getLicenseManagerReportGenerator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLicenseManagerReportGeneratorAsync(array $args = [])
 * @method \Aws\Result getLicenseUsage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLicenseUsageAsync(array $args = [])
 * @method \Aws\Result getServiceSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getServiceSettingsAsync(array $args = [])
 * @method \Aws\Result listAssociationsForLicenseConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAssociationsForLicenseConfigurationAsync(array $args = [])
 * @method \Aws\Result listDistributedGrants(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDistributedGrantsAsync(array $args = [])
 * @method \Aws\Result listFailuresForLicenseConfigurationOperations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFailuresForLicenseConfigurationOperationsAsync(array $args = [])
 * @method \Aws\Result listLicenseConfigurations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLicenseConfigurationsAsync(array $args = [])
 * @method \Aws\Result listLicenseManagerReportGenerators(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLicenseManagerReportGeneratorsAsync(array $args = [])
 * @method \Aws\Result listLicenseSpecificationsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLicenseSpecificationsForResourceAsync(array $args = [])
 * @method \Aws\Result listLicenseVersions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLicenseVersionsAsync(array $args = [])
 * @method \Aws\Result listLicenses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLicensesAsync(array $args = [])
 * @method \Aws\Result listReceivedGrants(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listReceivedGrantsAsync(array $args = [])
 * @method \Aws\Result listReceivedLicenses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listReceivedLicensesAsync(array $args = [])
 * @method \Aws\Result listResourceInventory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listResourceInventoryAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result listTokens(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTokensAsync(array $args = [])
 * @method \Aws\Result listUsageForLicenseConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listUsageForLicenseConfigurationAsync(array $args = [])
 * @method \Aws\Result rejectGrant(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rejectGrantAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateLicenseConfiguration(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLicenseConfigurationAsync(array $args = [])
 * @method \Aws\Result updateLicenseManagerReportGenerator(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLicenseManagerReportGeneratorAsync(array $args = [])
 * @method \Aws\Result updateLicenseSpecificationsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLicenseSpecificationsForResourceAsync(array $args = [])
 * @method \Aws\Result updateServiceSettings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateServiceSettingsAsync(array $args = [])
 */
class LicenseManagerClient extends AwsClient {}
