import readFromConsumerApi from '../../../readFromConsumerApi';

export default readFromConsumerApi('NeosProjectPackages')().NeosUiBackendConnectorDefault;

const {fetchWithErrorHandling} = readFromConsumerApi('NeosProjectPackages')().NeosUiBackendConnector;
export {fetchWithErrorHandling};
